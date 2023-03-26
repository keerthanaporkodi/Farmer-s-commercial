
<?php
session_start();
include "db_connect.php";
//$NEW_PRODUCT =$_GET["NEWPRODUCT"];
$NEW_NAME =$_GET["NEWNAME"];
//$NEW_NUMBER =$_GET["NEWNUMBER"];
//$NEW_PASSWORD=$_GET ["NEWPASSWORD"];
//$NEW_PRICE =$_GET["NEWPRICE"];
$NEW_LOCATION =$_GET["NEWLOCATION"];
$NEW_PINCODE =$_GET["NEWPINCODE"];
//ECHO $NEW_PASSWORD
$NEW_NUMBER =$_SESSION["PHONENUMBER"] ;

$NEW_PINCODE = INTVAL(PREG_REPLACE('/\D+/','',$NEW_PINCODE),10);

IF(($NEW_NAME != NULL) && ($NEW_LOCATION !=null)&&($NEW_PINCODE !=0)){
echo"
<br><br><CENTER>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 <b><a href=home.html>RETURN TO HOME</a></CENTER></b>";
 echo "<title>FARMER DATA SUBMITTED</title>";
 echo"
 <br> <br>  <br> <h1><center><p style=color:#4E004E>YOUR DETAILS HAVE BEEN SUBMITTED SUCCESSFULLY</p> </center></h1>
 <center> <h1><p style=color:#FF0000>THANK YOU...</p></center></h1></h1></center>";
 echo"<body background=farm-handshake.jpg>";
 echo"
<center> <b><a href=farmer_details.php>VIEW DETAILS</a></CENTER></b>";

$sql = "INSERT INTO signup_table ( FARMER_NAME, PHONE_NUMBER,  LOCATION, PINCODE ) 
VALUES ( '$NEW_NAME', '$NEW_NUMBER' , '$NEW_LOCATION', '$NEW_PINCODE')";
$result = $link->query($sql);
}
else {
	echo "<title>ATTENTION</title>";
	echo "<center><b><br><br><br><br><br><br><br><br><b><br><br><br><br><br><br><H2>EMPTY FIELDS NOT ALLOWED</b></H2></center>";
echo "<b><BR><CENTER><a href=farmer2.html>GO BACK</a></b></center>";
echo "<body background=ERROR4.png>";
}
$link-> close();
?>
