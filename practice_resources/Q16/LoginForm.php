<?php
    require_once 'common.php';

    // WRITE YOUR CODES HERE
    
?>

<html>
<body>
    <h1>Enter Login Details</h1>
    
    <head>
        <style>
            table,th,td{
                border: 1px solid black;
            }
        </style>
    </head>

    <form action="welcomeUser.php" method="post">
        <table>
        <tr>
            <th>Username</th>
            <td> <input name="username" value = '<?php echo $username ?>' /> </td>
        </tr>
        <tr>
            <th>Password</th>
            <td> <input type="password" name="password" /> </td>
        </tr>
        </table>
        <br/>
        <input type="submit" value="Login" />
    </form>
    
    <?php printErrors(); ?>
    
</body>
</html>