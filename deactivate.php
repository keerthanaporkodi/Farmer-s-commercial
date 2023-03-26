<?php
echo "<title>ACCOUNT DELETED</title>";
include "db_connect.php";
session_start();
//$id =3;
//mysql_select_db('farmer')or die(mysql_error());
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
//mysql_query("DELETE FROM farmer_table WHERE ID = '$id'") or die(mysql_error());


$itemToDelete = $_SESSION["PHONENUMBER"] ;
$sql_statement1 = "DELETE FROM `farmer`.`farmer_table` WHERE `farmer_table`.`PHONE_NUMBER` = $itemToDelete;";
$sql_statement2 = "DELETE FROM `farmer`.`signup_table` WHERE `signup_table`.`PHONE_NUMBER` = $itemToDelete;";

if ($link) {
	$result1 = mysqli_query($link, $sql_statement1);
	$result2 = mysqli_query($link, $sql_statement2);
	if ($result1 && $result2 ) {
		echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><B><H1><CENTER><p style=color:#0000A0>ACCOUNT DELETED SUCCESSFULLY</p></H1></CENTER>";
		echo "<body background=up2.png>";
		 ECHO"<center> <b><a href=farmer_details.php>VIEW DETAILS</a></CENTER></b>";
	}else{
		echo "error with the SQL " . mysqli_error($link);
	}
} else {
	echo "Error connecting" . mysqli_connect_error();
}
$row
?>