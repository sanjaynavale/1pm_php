<?php
//file handling 

/*
$handler=fopen("test.txt","w");
fwrite($handler,"Welcome to cnc web world..!!");
echo "File Created...";

fclose($handler);
*/

/*
$handler=fopen("test.txt","a");
fwrite($handler," In Navi Mumbia and Pune..");
echo "File Created...";

fclose($handler);
*/


/*
$handler=fopen("test.txt","r");
echo fread($handler,25);

fclose($handler);

*/

/*
$f="test1.txt";
if(file_exists($f))
{
	echo"File Allready Exists..!!!";
}
else
{
	$handler=fopen($f,"w");
	fwrite($handler,"Welcome to cnc web world..!!");
	echo "File Created...";

	fclose($handler);
}
*/

/*
$f="test1.txt";
unlink($f);
echo "file deleted..";
*/

/*
$f="test.txt";
if(rename($f,"new.txt"))
{
	echo"File Renamed...!!!";
	
}
else{
	
	echo"File Not Found...!!!";
}

*/

?>