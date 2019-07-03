<?php
//copy file 
$file = "movies.txt";
$copied_file = "copy.txt";
copy($file, $copied_file);

//Delete a afiel 
unlink($file);