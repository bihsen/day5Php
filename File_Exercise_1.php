<?php

/*
		1. Create a PHP script that will display the contents of a message.txt file,
		   located in the same folder as this script.

		2. View the contents of the transform_to_table.txt file in an HTML table.
	*/
//$file_handle = fopen("transform_to_table.txt", "w");
//fwrite($file_handle, " ");
// Fopen - open a file 

$file_handle = fopen("transform_to_table.txt", "r");
echo $file_handle;
//loop until you reach the end of file (eof)

echo '<table>';
while (!feof($file_handle)) {
	$line_of_text = fgets($file_handle);
	$string = explode(" ", $line_of_text);
	echo "<tr>$line_of_text</tr>.<br>";
	
}
echo "</table>";

