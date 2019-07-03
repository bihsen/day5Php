<?php

	/*
		Create a script that saves in the last_access.log file the timestamp of this time (now).

		We will replace the old timestamp.

		Choose the right setting to open the file
	 */






	$file_handle = fopen("last_access.log", "w");
	//$file_handle = fopen("last_access.log", "r");
	fwrite($file_handle,time());
	echo  time();

















	 /*$file_handle = fopen("test_file.txt", "w");
$file_content = "hellooooooo, how is your banana?";




// Write inside the file
fwrite($file_handle, $file_content);
// close the file 
fclose($file_handle);

echo ("file created!"); */