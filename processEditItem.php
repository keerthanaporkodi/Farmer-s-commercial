<?php
echo "<title>PRODUCT PRICE EDITED</title>";
include "db_connect.php";
session_start();
$NEW_NUMBER =$_SESSION["PHONENUMBER"] ;
$PRODUCT = $_GET['PRODUCT'];
$PRODUCT_PRICE_PER_Kg_IN_RUPEES = $_GET['PRODUCT_PRICE_PER_Kg_IN_RUPEES'];
$ID = $_GET['ID'];
		
$sql1= "SELECT  PRODUCT from farmer_table WHERE PRODUCT = '$PRODUCT' && PHONE_NUMBER  =  ' $NEW_NUMBER'" ;
$result1= $link-> query($sql1);
IF($PRODUCT_PRICE_PER_Kg_IN_RUPEES==0) {
	echo "<title>ATTENTION</title>";
	ECHO"<br><br> <br>  <br><br> <br>  <br><br>  <br>  <br><br> <br><BR><BR>  <br><center> <h1>PLEASE FILL THE FIELD</center></h1></h1></center>";
ECHO"<body background=ERROR4.png>";}
//ECHO"<br><center> <b><a href=DELETE.PHP>GO BACK</a></CENTER></b>"; 
ELSE {
if($result1-> num_rows == 1 ){
if ($link ) {
	
$sql_statement = "UPDATE `farmer`.`farmer_table` SET `PRODUCT` = '$PRODUCT', `PRODUCT_PRICE_PER_Kg_IN_RUPEES`= '$PRODUCT_PRICE_PER_Kg_IN_RUPEES' WHERE `farmer_table`.`ID` ='$ID'";
$result= $link-> query($sql_statement);
if ($result){
     echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><B><H1><CENTER><p style=color:#0000A0>PRODUCT PRICE EDITED SUCCESSFULLY</p></H1></CENTER>";
	 echo "<body background=blur4.png>";
		echo"<center> <b><a href=farmer_details.php>VIEW DETAILS</a></CENTER></b><BR>";
}else {
	echo"error in sql1" . mysqli_error($link);
}}
else {
	echo"error in sql" . mysqli_connect_error();
}}
ELSE
	ECHO"<br><br> <br>  <br><br> <br>  <br><br>  <br>  <br><br> <br>  <br><center> <h1><p style=color:#FF0000>PRODUCT DOES NOT EXISTS</p></center></h1></h1></center>";
ECHO"<center> <b><a href=DELETE.PHP>GO BACK</a></CENTER></b>";
}
?>
