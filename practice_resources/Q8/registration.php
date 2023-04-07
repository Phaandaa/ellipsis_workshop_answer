<?php
    #Write your code here
    $username = $_POST["username"];
    $password = $_POST["password"];
    $errors = [];
    if (strlen($username) >= 6 && !preg_match('/[^A-Za-z]/', $username) && strlen($password) >= 8){
        echo "<h1>Thanks for registering $username</h1>";
    } 
    
    if (!(strlen($username) >= 6)){
        $errors[] = "Username must be at least 6 characters.";
    } 
    
    if (preg_match('/[^A-Za-z]/', $username)){
        $errors[] = "Your username can only contain lowercase or uppercase letters";
    } 
    
    if (!(strlen($password) >= 8)) {
        $errors[] = "Your password must be at least 8 characters";
    }

    // var_dump($errors);

    if (!empty($errors)){
        foreach ($errors as $error){
            echo "Error: $error <br>";
        }
    }




    
  
    


    
    
?>