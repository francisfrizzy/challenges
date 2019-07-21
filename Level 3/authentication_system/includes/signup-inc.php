<?php
    //check if user clicked signup button; necessary
    if (isset($_POST['signup-submit'])){
        //we start database connection
        function openCon(){
            $serverName = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "loginexample";
            $conn = new mysqli($serverName, $dbUsername, $dbPassword, $dbName) or die("Connect failed: %s\n". $conn -> error);
            return $conn;
        }
        //function to close connection
        function closeCon($conn){
            $conn -> close();
        }
        //Start connection
        $conn = openCon();
        
        //Taking data from signup form
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['uid'];
        $pwd = $_POST['password'];
        $pwdRepeat = $_POST['confirm_password'];
        $email = $_POST['email'];
        //dealing with birthday
        $month = $_POST['month'];
        $day = $_POST['day'];
        $year = $_POST['year'];
        $birthday = "$year-$month-$day";
        //dealing with radio buttons
        //have to include in error checking immediately
        
        //An array containing the radio input values that are allowed
        $allowedAnswers = array('M', 'F');
        //The radio button value that the user sent us.
        $chosenAnswer = $_POST['gender'];
        //Make sure that the value is in our array of allowed values.
        if(in_array($chosenAnswer, $allowedAnswers)){
            //Check to see if the user ticked yes.
            if(strcasecmp($chosenAnswer, 'M') == 0){
                //Set our variable to TRUE because they agreed.
                $gender = "M";
            }
            else if(strcasecmp($chosenAnswer, 'F') == 0){
                $gender = "F";
            }
        } else{ //force field to be empty
            $gender = "";
        }
        
        //check if inputs are empty
        if (empty($firstname) || empty($lastname) || empty($gender) || empty($username) || empty($email) || empty($pwd) || empty($pwdRepeat)){
            header("Location: ../signup.php?error=emptyfields&firstname=".$firstname."&uid=".$username."&email=".$email."&lastname=".$lastname);
            exit();
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
            //before going further, check email and uid validity
            header("Location: ../signup.php?error=invalidmailuid");
            exit();
        }
        else if (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)){
            //check validity of input characters on names
            header("Location: ../signup.php?error=invalidname&email=".$email."&username=".$username);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            //check validity of input characters on username
            header("Location: ../signup.php?error=invaliduid&email=".$email."&lastname=".$lastname."&firstname=".$firstname);
            exit();
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            //check email validity
            header("Location: ../signup.php?error=invalidmail&uid=".$username."&lastname=".$lastname."&firstname=".$firstname);
            exit();
        } 
        else if ($pwd !== $pwdRepeat){
            //check if the passwords entered are same
            header("Location: ../signup.php?error=passwordcheck&uid=".$username."&email=".$email."&lastname=".$lastname."&firstname=".$firstname);
            exit();
        }
        else if (!checkdate((int)$month, (int)$day, (int)$year)){
            //check if correct date/ date exists
            header("Location: ../signup.php?error=wrongdate&uid=".$username."&email=".$email."&lastname=".$lastname."&firstname=".$firstname);
            exit();
        }
        else{
            //first checking if uid is already used, using prepared statements
            $stmt1 = $conn->prepare("SELECT username FROM signups WHERE username=?");
            $stmt1->bind_param("s", $username);
            $stmt1->execute();
            $result = $stmt1->get_result();
            if($result->num_rows > 0){
                header("Location: ../signup.php?error=usertaken&email=".$email."&firstname=".$firstname."&lastname".$lastname);
                exit();
            }
            else if($result->num_rows === 0){
                //insert data
                $stmt2 = $conn->prepare("INSERT INTO signups (firstname, lastname, username, pwd, email, birthday, gender) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                $stmt2->bind_param("sssssss", $firstname, $lastname, $username, $hashedPwd, $email, $birthday, $gender);
                $stmt2->execute();
                header("Location: ../signup.php?signuperror=success");
                exit();
            }
                    

        }
        //After execution, close connection in order to save resources.
        $stmt1->close();
        $stmt2->close();
        closeCon($conn);    
    }
    else {
        //if user attempts to access this page without clicking submit,send them back to signup page
        header("Location: ../signup.php");
        exit();
    }
    
   
