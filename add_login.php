

<?php


include "db_connect.php";

 $NEWNUMBER =$_GET["PHONENUMBER"];

 $NEWPINCODE =$_GET["PASSWORD"];
 
$sql1= "SELECT PHONENUMBER, PASSWORD FROM login_table WHERE PHONENUMBER LIKE '%" . $NEWNUMBER . "%'";
//$sql= "SELECT PHONENUMBER, PASSWORD FROM login_table WHERE PHONENUMBER ='"+ $PHONENUMBERfromform +"'"+" AND  PASSWORD ='"+$PASSWORDfromform +"'";
$result1= $link-> query($sql1);



IF(($NEWNUMBER == NULL) || ($NEWPINCODE == NULL)){
IF (($NEWNUMBER == NULL) && ($NEWPINCODE == NULL))
{
include "no_phno.php";
include "no_pw.php";
}
else
IF($NEWNUMBER == NULL)	
include "no_phno.php";	 
else
include "no_pw.php";	}

else
if($result1-> num_rows >0 )
{
	include "accounts.php";
}
else		
{
IF((strlen($NEWNUMBER) == 10)||(strlen($NEWNUMBER) < 10))
{	
$NEW_NUMBER = INTVAL(PREG_REPLACE('/\D+/','',$NEWNUMBER),10);
}
ELSE
$NEW_NUMBER = $NEWNUMBER;

$NEW_PINCODE = INTVAL(PREG_REPLACE('/\D+/','',$NEWPINCODE),10);


//ECHO $NEWNUMBER;
//ECHO $NEWPINCODE; 

IF((strlen($NEW_NUMBER) != 10) || (strlen($NEW_PINCODE) != 8))
{
IF((strlen($NEW_NUMBER) != 10) && (strlen($NEW_PINCODE) != 8))
{
	ECHO"<br><H3>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href=NEWUSER.php>GO BACK</a></H3></b>";
include "error_phno.php";
include "error_pw.php";
}
else	
IF(strlen($NEW_NUMBER) != 10)
include "error_phno.php";
else
include "error_pw.php";	
}
else

{
//<br><br><CENTER>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
//&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
//&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
// &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
 //&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 //&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 //<b><a href="home.html">RETURN TO HOME</a></CENTER></b>
 
 echo"<br> <br>  <br> <h1><center><p style='color:#4E004E'>YOUR DETAILS HAVE BEEN SUBMITTED SUCCESSFULLY</p> </center></h1>
<center> <h1><p style='color:#FF0000'>THANK YOU...</p></center></h1></h1></center>";
ECHO"<title>NEW DATA SUBMITTED</title>";
ECHO"<CENTER><H3><a href=login.php>GO TO LOGIN PAGE</a></center></H3></b>";
$sql = "INSERT INTO login_table ( PHONENUMBER, PASSWORD ) VALUES ( '$NEWNUMBER', '$NEWPINCODE')";
$result = $link->query($sql); }}
echo"<body background=farm-handshake.jpg>";
?>
