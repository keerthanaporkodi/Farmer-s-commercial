
<?php
include "db_connect.php";
session_start();

$NEW_NUMBER =$_SESSION["PHONENUMBER"] ;
$sql= "SELECT  FARMER_NAME,  LOCATION, PINCODE from signup_table 
 WHERE PHONE_NUMBER LIKE '%" . $NEW_NUMBER . "%'";
$result= $link-> query($sql);
$NEW_PRODUCT =$_GET["NEWPRODUCT"];
$NEW_PRICE =$_GET["NEWPRICE1"];

$sql1= "SELECT  PRODUCT from farmer_table WHERE PRODUCT = '$NEW_PRODUCT' && PHONE_NUMBER  =  ' $NEW_NUMBER'" ;
$result1= $link-> query($sql1);



IF($row = $result->fetch_assoc()){

$NEW_LOCATION =$row["LOCATION"];
$NEW_PINCODE =$row["PINCODE"];
$NEW_NAME =$row["FARMER_NAME"];}
?>

 
<?php
IF(($NEW_PRODUCT==NULL) || ($NEW_PRICE==0)) {
	echo "<title>ATTENTION</title>";
	ECHO"<br><br> <br>  <br><br> <br>  <br><br>  <br>  <br><br> <br>  <br><center> <h1>PLEASE FILL BOTH FIELDS</center></h1></h1></center>";
	ECHO"<body background=ERROR4.png>";
ECHO"<br><center> <b><a href=farmer.HTML>GO BACK</a></CENTER></b>"; }
ELSE {
if($result1-> num_rows == 0 ){
ECHO"	<body background=farm-handshake.jpg>";
	ECHO"<br><br><CENTER>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 <b><a href=home.html>RETURN TO HOME</a></CENTER></b>";
 echo "<title>PRODUCT & ITS PRICE ADDED</title>";
ECHO"<br> <br>  <br> <h1><center><p style=color:#4E004E>YOUR DETAILS HAVE BEEN SUBMITTED SUCCESSFULLY</p> </center></h1>";
ECHO"<center> <h1><p style=color:#FF0000>THANK YOU...</p></center></h1></h1></center>";
ECHO"<center> <b><a href=farmer_details.php>VIEW DETAILS</a></CENTER></b>";
$sql = "INSERT INTO farmer_table (PRODUCT, FARMER_NAME, PHONE_NUMBER, PRODUCT_PRICE_PER_Kg_IN_RUPEES, LOCATION, PINCODE ) 
VALUES ('$NEW_PRODUCT', '$NEW_NAME', '$NEW_NUMBER', '$NEW_PRICE', '$NEW_LOCATION', '$NEW_PINCODE')";
$result = $link->query($sql);
}
ELSE
	ECHO"<br><br> <br>  <br><br> <br>  <br><br>  <br>  <br><br> <br>  <br><center> <h1>PRODUCT ALREADY EXISTS</p></center></h1></h1></center>";
ECHO"<body background=ERROR4.png>";
ECHO"<center> <br><b><a href=farmer.HTML>GO BACK</a></CENTER></b>";
}

	



?>
<script type="text/javascript">
    window.history.forward();
    function noBack()
    {
        window.history.forward();
    }
</script>

<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
