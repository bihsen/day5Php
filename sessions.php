<?php
// Start the session before anything else. mandatory!
session_start();
// Create(or update) a session value
$_SESSION['page_view'] = 1;
$_SESSION['LAST_ACTIVITY'] = time();
var_dump($_SESSION);
var_dump($_COOKIE);

//check  the lifetime of the session

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > 120
){
    //delete the session from the script
    session_unset();
    // delete the session from the file system(server)
    session_destroy();
}
