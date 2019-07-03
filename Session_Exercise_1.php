<?php
/*
    Create two pages :

    `create-session.php`
        The page will initialize a session variable 'viewed' to `true`;

    `get-viewed.php`
        The page will display a message 'You have visited the page
        create-session ', if the 'viewed' variable is assigned.

        Otherwise, it will display the message 'You have not visited
        the create-session page '
 */

 session_start();

 if(isset($_POST["subButton"])){
     unset($_SESSION["first_time"]);
 }

if(!isset( $_SESSION["first_time"])){
    $_SESSION["first_time"] = time();
    $_SESSION["count"] = 1;
}else
    $_SESSION["count"] += 1;

    echo "First visit :" . date('Y-m-d H:i:s' , $_SESSION["first_time"])."<br>";
    echo "Number of visits :" . $_SESSION["count"];

    ?>

    <form action="" method="POST">
        <input type="submit" name="subButton" value="Clear">
    </form>
