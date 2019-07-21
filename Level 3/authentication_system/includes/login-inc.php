<?php
    //check if user clicked login button; necessary
    if (isset($_POST['login-submit'])){
        //we include database connection
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
        
        
        //Taking data from login form
        $mailuid = $_POST['mailuid'];
        $password = $_POST['pwd'];
        
        if (empty($mailuid) || empty($password)){
            header("Location: ../index.php?loginerror=emptyfields");
            exit();
        }
        else {
            //check user mailuid and password matching
            $sql = "SELECT * from signups WHERE username=? OR email=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../index.php?loginerror=sqlerror");
                exit();
            }
            else{
                //datatypes s-string, i-integer, d-double, b-blob
                mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid); // binding
                mysqli_stmt_execute($stmt); //execute sql
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)){
                    $pwdCheck = password_verify($password, $row['pwd']); //returns boolean 1 or 0
                    if ($pwdCheck == false){
                        header("Location: ../index.php?loginerror=wrongpwd");
                        exit();
                    }
                    else if ($pwdCheck == true){
                        //start a session
                        session_start();
                        $_SESSION['userId'] = $row['id'];
                        $_SESSION['userUid'] = $row['username'];
                        
                        header("Location: ../index.php?loginsuccess=success");
                        exit();    
                    }
                }
                else{
                    header("Location: ../index.php?loginerror=nouser");
                    exit();
                }
            }
        }    
    }
    else{
        //if attempting to get to this page without clicking the login button, go back to index page
        header("Location: ../index.php");
        exit();
    }