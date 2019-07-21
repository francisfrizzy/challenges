<? php
    //connecting to the database via the server
    //create database of type utf8-general-ci
    
    function openCon(){
        $serverName = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "loginexample";
        $conn = new mysqli($serverName, $dbUsername, $dbPassword, $dbName) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }

    function closeCon($conn){
        $conn -> close();
    }

?>