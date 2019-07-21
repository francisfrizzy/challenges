<?php
    //check if user clicked signup button; necessary
    if (isset($_POST['edit-submit'])){
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
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $age = $_POST['age'];
        $degree = $_POST['degree'];
        $course = $_POST['course'];
        $id = $_POST['userId'];
        
        
        //check if inputs are empty
        if (empty($name) || empty($surname) || empty($age) || empty($degree) || empty($course)){
            header("Location: ../index.php?error=emptyfields&name=".$name."&course=".$course."&degree=".$degree."&suname=".$surname);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[a-zA-Z]*$/", $surname)){
            //check validity of input characters on names
            header("Location: ../index.php?error=invalidname&degree=".$degree."&course=".$course);
            exit();
        }
        else if ( $age > 50 || $age < 18){
            //check age validity
            header("Location: ../index.php?error=age&name=".$name."&surname=".$surname."&course=".$course."&degree=".$degree);
            exit();
        }
        else{
            //insert data
            $stmt = $conn->prepare("UPDATE levels SET name = ?, surname = ?, age = ?, degree = ?, course = ? WHERE id = ?");
            $stmt->bind_param("ssissi", $name, $surname, $age, $degree, $course, $id);
            $stmt->execute();
            header("Location: ../index.php?edit=success");
            exit();    

        }
        //After execution, close connection in order to save resources.
        $stmt->close();
        closeCon($conn);    
    }
    else {
        //if user attempts to access this page without clicking submit,send them back to signup page
        header("Location: ../index.php");
        exit();
    }
    
   
