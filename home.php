<?php



if(isset($_POST['subButton'])){
    $userMail=$_POST['email'];
    $userPass=$_POST['myPass'];
    $file_handle = fopen('users.txt','r');
    while (!feof($file_handle)) {
        $line_of_text = fgets($file_handle);
        //
        $userInfos = explode(";", $line_of_text);
        
        
        $pos =strpos($userInfos[0], "=");
         $mailKey = substr($userInfos[0],0, $pos);
         $mailValue = substr($userInfos[0], $pos +1);

         $pos= strpos($userInfos[1], '=');
         $passKey = substr($userInfos[1],0, $pos);
         $passValue = substr($userInfos[1], $pos +1 );

         $user[$mailKey] = trim($mailValue);
         $user[$passKey] = trim($passValue);

         $users[] = $user;
         
    }

    //var_dump($users);
    $message = "user doesn't exist";
    
    foreach ($users as $user) {
        if($user['mail'] == trim($_POST['email']) && $user['password'] == trim($_POST['myPass'])) {

            $message = "User successfullt logged in ";
            break;
        }    
    }



    echo $message;
    fclose($file_handle);
   
}else {
    echo "Something wrong with the users file ";

}
//echo $file_handle;


?>