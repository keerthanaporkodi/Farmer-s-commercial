<?php  
echo "<title>YOUR DETAILS EDITED</title>";
include "db_connect.php";
session_start();
$NEW_NUMBER =$_SESSION["PHONENUMBER"] ;
$ID = $_GET['ID'];
$FARMER_NAME =$_GET['FARMER_NAME'];
//$PHONE_NUMBER = $_GET['PHONE_NUMBER'];    

$LOCATION = $_GET['LOCATION'];
$PINCODE = $_GET['PINCODE'];

//$sql1= "SELECT   from signup_table WHERE PRODUCT = '$PRODUCT' && PHONE_NUMBER  =  ' $NEW_NUMBER'" ;
//$result1= $link-> query($sql1);

//if($result1-> num_rows == 1 ){
if ($link ) {
	
$sql_statement = "UPDATE `farmer`.`signup_table` SET `FARMER_NAME` = '$FARMER_NAME',`LOCATION`= '$LOCATION',`PINCODE`= '$PINCODE' WHERE `signup_table`.`ID` ='$ID'";
$sql2_statement = "UPDATE `farmer`.`farmer_table` SET `FARMER_NAME` = '$FARMER_NAME',`LOCATION`= '$LOCATION',`PINCODE`= '$PINCODE' WHERE `farmer_table`.`PHONE_NUMBER` ='$NEW_NUMBER'";
$result= $link-> query($sql_statement);
$result2= $link-> query($sql2_statement);
IF(($FARMER_NAME==NULL) || ($LOCATION==NULL) || ($PINCODE==0)) {
	echo "<title>ATTENTION</title>";
	ECHO"<br><br> <br>  <br><br> <br>  <br><br>  <br>  <br><br> <br> <BR><BR> <br><center> <h1>PLEASE FILL ALL THE FIELDS</center></h1></h1></center>";
ECHO"<body background=ERROR4.png>";}
//ECHO"<br><center> <b><a href=farmer_details.php>GO BACK</a></CENTER></b>"; 
ELSE {
if (($result)&&($result2)){
     echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><B><H1><CENTER><p style=color:#0000A0> EDITED SUCCESSFULLY</p></H1></CENTER>";
	 echo "<body background=blur4.png>";
		echo"<center> <b><a href=farmer_details.php>VIEW DETAILS</a></CENTER></b><BR>";
}else {
	echo"error in sql1" . mysqli_error($link);
}}
}else 
	echo"error in sql" . mysqli_connect_error();

//ELSE
	//ECHO"<br><br> <br>  <br><br> <br>  <br><br>  <br>  <br><br> <br>  <br><center> <h1><p style=color:#FF0000> DOES NOT EXISTS</p></center></h1></h1></center>";
//CHO"<center> <b><a href=DELETE.PHP>GO BACK</a></CENTER></b>";

?>






















































