<?php 

    function openConnection(){
        $dbuser = "root";
        $dbpass = "";
        $dbhost = "localhost";
        $db = "tzolkin";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }

    function CloseCon($conn){
        $conn -> close();
    }

?>