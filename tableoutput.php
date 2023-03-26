
<?php

include "db_connect.php";
session_start();
//include "search_all_products.php";
 ?>
 <body background="listing.png">
<html>
<head>
<title> FARMERS LIST</title>
</head>

<body>


<BR> <CENTER>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <b><a href="home.html">RETURN TO HOME</a></CENTER></b>
           
 BR> <CENTER>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<b><a href="customer.html">GO BACK</a></CENTER></b> 
<style>
table,td {
	
	border: 1px  solid #0A8A0A;
	width: 60%;
	
}

</style>

</table>



</body>

</html>

<?php

$LOCATIONfromform =$_GET["LOCATION"];
$PRODUCTfromform=$_GET["PRODUCT"];
$PHONEfromform=   $_SESSION["PHONENUMBER"] ;
//echo $PRODUCTfromform;


$sql= "SELECT PRODUCT, FARMER_NAME, PHONE_NUMBER, PRODUCT_PRICE_PER_Kg_IN_RUPEES, LOCATION, PINCODE from farmer_table 
 WHERE PRODUCT LIKE '" . $PRODUCTfromform . "%'&& LOCATION LIKE '%" . $LOCATIONfromform . "%'";
$result= $link-> query($sql); 

$sql1= "SELECT PRODUCT FROM farmer_table 
 WHERE PRODUCT LIKE '%".$PRODUCTfromform."%'";
$result1= $link-> query($sql1);
IF($PRODUCTfromform != NULL){
if($result1-> num_rows >0 ){
	IF($row = $result1->fetch_assoc()) {
		$PRODUCT=$row["PRODUCT"];
	echo "<h1><center><p style='color:#0A8A0A'><U>THE FARMERS WHO SELLS $PRODUCT</U>  </p></h1>";
}}}
ELSE
	echo "<h1><center><p style='color:#0A8A0A'><U>THE FARMERS WHO SELLS FARM PRODUCTS</U>  </p></h1>";




if($result-> num_rows >0 ){
	
	
echo  "<center><table>";

echo "<tr>
     <td><b><H3><center><font color=#8A0A8A>PRODUCT</b></td>
	 <td><b><H3><center><font color=#8A0A8A>FARMER NAME</b></td>
	 <td><b><H3><center><font color=#8A0A8A>CONTACT</b></<td>
	 <td><b><H3><center><font color=#8A0A8A>PRICE/Kg IN Rs</b></td>
	 <td><b><H3><center><font color=#8A0A8A>LOCATION</b></td>
	 <td><b><H3><center><font color=#8A0A8A>PINCODE</b></td>
	 </tr>";


   while($row = $result->fetch_assoc()) {
	   
 print "<tr><td>"; echo"<center>"; echo "<H3>" ;  echo $row["PRODUCT"]; print "</td><td>"; echo"<center>"; echo $row["FARMER_NAME"]; 
 print "</td><td>"; echo"<center>";   echo $row["PHONE_NUMBER"]; print "</td><td>"; echo"<center>"; echo "<H3>" ; echo  $row["PRODUCT_PRICE_PER_Kg_IN_RUPEES"];
 print "</td><td>"; echo"<center>"; echo $row["LOCATION"]; print "</td><td>"; echo"<center>"; echo $row["PINCODE"];  print "</td></tr>" ;
	
  
}
	
}else {
  echo "<center><b><br><br><br><br><br><br><br><br><br><br><H2>NO MATCH FOUND</b></H2></center>";
}  
	
 echo"</table>";
 
 
 $link-> close();
 ?>