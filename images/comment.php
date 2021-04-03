<?php
$connect = mysql_connect("localhost","root","");

if($connect)
{
	$query = "CREATE DATABASE comments";
	
	if(mysql_query($query)
	{
		$query1 = "CREATE TABLE date(Name varchar(20), comment varchar(500))";
		mysql_select_db("comments", $connect);
		 
		 if(mysql_query($query1))
		 {
			 echo"Everthing is fine";
		 }
		     else
{
    die("Failed to connect to database:" . mysql_error());
}
		
	}
    else
{
    die("Failed to connect to database:" . mysql_error());
}
}

else
{
    die("Failed to connect to database:" . mysql_error());
}





?>