<?php
$file_handle = fopen("test_file.txt", "w");
$file_content = "hellooooooo, how is your banana?";




// Write inside the file
fwrite($file_handle, $file_content);
// close the file 
fclose($file_handle);

echo ("file created!");
