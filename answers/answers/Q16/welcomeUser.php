<?php
require_once "common.php";

$errors = [];

    // Get the data login.php
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Create the DAO object to facilitate connection to the database.
    $dao = new UserDAO();
    $user = $dao->get( $username );

    // Check if the username exists
    if ($user)
    {
        // If username exists
        // get the hashed password from the database
        // Match the hashed password with the one which user entered
        // if it does not match. -> error
        $hashed_password = $user->getPasswordHash();
        // check if the plain text password is valid
        $status = password_verify( $password, $hashed_password); 
        
        if ($status)
        { 
            $_SESSION["username"] = $username;
        }
        else
        {
            // password not valid
            // return to login page and show error
            $errors [] = "Invalid password.";
            $_SESSION['errors'] = $errors;
            $_SESSION["login_page"] = $username;
            header("Location: LoginForm.php");
            return;
        }

    } else
    {
        $errors [] = "Username does not exist in the database.";
        $_SESSION['errors'] = $errors;
        $_SESSION["login_page"] = $username;
        header("Location: LoginForm.php");
        return;
            
    }


if (isset ($_SESSION["username"])){
    echo "<h3> Welcome ". $_SESSION["username"] .  ". Click here to <a href='LoginForm.php?exitsession=true'> Logout </a> </h3>";
}
else
{
    header("Location: LoginForm.php");
    return;
}

?>