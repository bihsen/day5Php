<?php




// Fopen - open a file 
$file_handle= fopen("movies.txt", "r");
echo $file_handle;

//loop until you reach the end of file (eof)
while(!feof($file_handle)){
    $line_of_text =fgets($file_handle);
    echo $line_of_text . "<br>";
}
//close the opened file 
fclose($file_handle);