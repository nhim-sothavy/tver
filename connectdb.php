<?php 
    // declear variable
    $servername='localhost';
    $username='Thavy';
    $password='123';
    $db_name='su6_db';
    // create connection database
    $connection = new mysqli($servername,$username,$password,$db_name);
    if($connection->connect_error){
        echo "Connection database failed";
    }else{
        echo "";
    }


?>