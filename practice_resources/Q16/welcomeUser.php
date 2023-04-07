<?php
require_once "common.php";

$errors = [];

    // Get the data
    

    // Create the DAO object to facilitate connection to the database.
    

    // Check if the username exists
    if ()
    {
        // If username exists
        // get the hashed password from the database
        // Match the hashed password with the one which user entered
        // if it does not match. -> error
        
        // check if the plain text password is valid
        
        
        if ()
        { 
            
        }
        else
        {
            // password not valid
            // return to login page and show error
            $errors [] = "Invalid password.";
            
            header("Location: ");
            return;
        }

    } else
    {
        $errors [] = "Username does not exist in the database.";
        
        header("Location: ");
        return;
            
    }


if (){

    echo "
        <h3>
            Welcome ".  
            // write your code here
            
            .  ". Click here to <a href='
            <-- Write your code here -->
            
        '> Logout </a>
        </h3>
    
    ";
}
else
{
    header("Location: ");
    return;
}

?>