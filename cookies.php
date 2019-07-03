<?php
//create a cookie
//this cookie will expire afeter 2 minutes 
setcookie("username", "simon", time() +120);
setcookie("date", "2019-07-02", time() +120);

var_dump($_COOKIE);