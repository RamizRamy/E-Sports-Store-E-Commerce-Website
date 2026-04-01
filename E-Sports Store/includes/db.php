<?php

    try{

    // making connection between the data base and the project
    $pdo = new PDO("mysql:host=localhost;dbname=e-sports","root","");

    //Trying to get a message if there is an error in the connection
    $pdo->setAttribute(PDO::ATTR_ERRMODE, 
    PDO::ERRMODE_EXCEPTION); 
    } catch (PDOException $e) { 
        die("Connection failed: " . $e->getMessage()); 
    } 


?>