
 
 <?php
session_start();
?>
<?php
include "db_connect.php";

//include "search_all_products.php";
 
$PHONENUMBERfromform =$_GET["PHONENUMBER"];
$PASSWORDfromform=$_GET["PASSWORD"];

$_SESSION["PHONENUMBER"]=$PHONENUMBERfromform;

/*IF($PHONENUMBERfromform == NULL){
$PHONENUMBERfromform = -100.001;	}
IF($PASSWORDfromform == NULL){
$PASSWORDfromform =-100.037 ;	}


IF(strlen($PHONENUMBERfromform)!= 10){
$PHONENUMBERfromform = -100.001;	}
IF(strlen($PASSWORDfromform) != 8){
$PASSWORDfromform =-100.037 ;	}


$sql= "SELECT PHONENUMBER, PASSWORD FROM login_table WHERE PHONENUMBER LIKE '%" . $PHONENUMBERfromform . "%'&& PASSWORD LIKE '%" . $PASSWORDfromform . "%'";*/
$sql= "SELECT PHONENUMBER, PASSWORD FROM login_table WHERE PHONENUMBER =' $PHONENUMBERfromform ' AND  PASSWORD ='$PASSWORDfromform '"; 
$result= $link-> query($sql);
if($result-> num_rows >0 ){
	
INCLUDE "HOME.HTML";

//echo "<h1><center><p style='color:#1E9E1E'> YOUR ID: $PHONENUMBERfromform </p></h1>";	



 
}else {
	echo "<center><b><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><H1>AUTHENTICATION FAILED</b></H1></center>";
	echo "<title>ERROR</title>";
	echo "<center><h2><b><a href=login.php>GO BACK</a></b></h2></center>";
}  


 
 
 $link-> close();
 ?>
  
  <body background="ERROR4.png">