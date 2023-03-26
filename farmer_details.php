

<?php
include "db_connect.php";
session_start();
 ?>
 
 
 
           

<style>
table,td {
	
	border: 1px  solid #0A8A0A;
	width: 60%;
	
}

</style>

</table>



</body>

</html>
<br><br><CENTER>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 <b><a href="home.html">RETURN TO HOME</a></CENTER></h3></b>

<?php

//$LOCATIONfromform ="SIRUMUGAI,COIMBATORE";
$PRODUCTfromform=   $_SESSION["PHONENUMBER"] ;

//echo $PRODUCTfromform;


 
$sql= "SELECT ID, FARMER_NAME, PHONE_NUMBER, LOCATION, PINCODE from signup_table 
 WHERE PHONE_NUMBER LIKE '%" . $PRODUCTfromform . "%'";
$result1= $link-> query($sql);
 IF($row = $result1->fetch_assoc()) {
	 ECHO"<body background=AED3.PNG>";
	 ECHO"<CENTER><BR>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp <b><a href=LOGIN.PHP>LOGOUT</a></CENTER></b>";
	 echo "<h3><B><p style='color:#0A8A0A'><U>YOUR DETAILS</U>  </p></B></h3>";
	  //echo "ID" . $row['ID'] . "<br>";
echo "NAME &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp:&nbsp" ; echo $row["FARMER_NAME"]; echo"<br>";
echo "PHONE NUMBER:&nbsp" ; echo $row["PHONE_NUMBER"]; echo"<br>";
echo "LOCATION &nbsp &nbsp &nbsp &nbsp &nbsp   :&nbsp" ; echo $row["LOCATION"]; echo"<br>";
echo "PINCODE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp" ; echo $row["PINCODE"]; echo"<br>";

?>
<form action="showEditForm2.php">
			<input type="hidden" name="ID" value=" <?php echo $row['ID']; ?> " ></input>
            <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<button type="submit">EDIT</button>
			</form>

 
 
<?php
echo" &nbsp &nbsp &nbsp &nbsp <button onclick=\" location. href='deleted.php'\">DEACTIVATE ACCOUNT</button>&nbsp &nbsp &nbsp";
$sql= "SELECT PRODUCT, FARMER_NAME, PHONE_NUMBER, PRODUCT_PRICE_PER_Kg_IN_RUPEES, LOCATION, PINCODE from farmer_table 
 WHERE PHONE_NUMBER LIKE '%" . $PRODUCTfromform . "%'";
$result2= $link-> query($sql);

if($result2-> num_rows >0 ){
	

 echo "<title>ADD/EDIT/DELETE</title>";
echo "<center><H2><B><p style='color:#0A8A0A'><U>PRODUCT DETAILS</U></H2>  </B></p>";

	
echo  "<center><table>";

echo "<tr>
     <td><b><H3><center><font color=#8A0A8A>PRODUCT</b></td>
	 
	 
	 <td><b><H3><center><font color=#8A0A8A>PRICE/Kg IN Rs</b></td>
	 
	 
	 </tr>";


   while($row = $result2->fetch_assoc()) {
	  IF($row["PRODUCT"] != NULL){ 
	  
 print "<tr><td>"; echo"<center>"; echo "<H3>" ;  echo $row["PRODUCT"]; print "</td><td>"; echo"<center>"; echo "<H3>" ; echo  $row["PRODUCT_PRICE_PER_Kg_IN_RUPEES"];
	  print "</td></tr>" ;}
	  
	


}
	echo"</table>"; 
	echo"<BR><button onclick=\"location. href='farmer.html'\">ADD PRODUCT</button><BR>";
	echo"<BR><button onclick=\"location. href='delete.php'\">EDIT / DELETE PRODUCT</button>";
 }
else{
	
	echo "<title>ADD/EDIT/DELETE</title>";
	echo "<center><b><br><br><H2><p style='color:#B900B9'>NO PRODUCT DETAILS FOUND <BR><BR> PLEASE ADD  </B></p></b></H2></center>";
	echo"<center><BR><button onclick=\"location. href='farmer.html'\">ADD PRODUCT</button><center><BR>";
	
	
}
 }else {
	echo "<title>NO FARMER DETAILS</title>";
  echo "<center><b><br><br><br><br><br><br><br><br><br><br><H2><p style='color:#0A8A0A'>NO DETAILS FOUND <BR><BR> PLEASE SIGN UP </B></p></b></H2></center>";
  ECHO"<b><center><h3><a href=farmer2.html>NEW FARMER SIGNUP</a></h3></center></b>";
	
?>
<body background="e3.png">
 <?php
 }
 
 $link-> close();
 
 ?>
 
 <script type="text/javascript">
    window.history.forward();
    function noBack()
    {
        window.history.forward();
    }
</script>

<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">