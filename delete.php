
<?php
include "db_connect.php";
session_start();
$PHONEfromform =   $_SESSION["PHONENUMBER"] ;
//$id =3;
//mysql_select_db('farmer')or die(mysql_error());
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
//mysql_query("DELETE FROM farmer_table WHERE ID = '$id'") or die(mysql_error());
?>
<style>
table,td {
	
	border: 1px  solid #0A8A0A;
	width: 60%;
	
}

</style>
<body background="AED2.0.PNG">
</table>
<!--<body background="result.jpg">-->
<?php
$sql_statement = "SELECT ID, PRODUCT, PRODUCT_PRICE_PER_Kg_IN_RUPEES, PHONE_NUMBER from farmer_table WHERE PHONE_NUMBER = '$PHONEfromform' ";
echo "<title>EDIT/DELETE</title>";
if ($link) {
	$result = mysqli_query($link, $sql_statement);
	if ($result) {echo"<BR><CENTER><button onclick=\"location. href='farmer_details.php'\"><B><H3>CANCEL</H3></B></button></CENTER>";
		 while ($row = $result->fetch_assoc()) {
			 //echo "ID" . $row['ID'] . "<br>";
			 echo  "<center><table>";
			 echo "<tr>
			 <td><b><font color=#8A0A8A>PRODUCT &nbsp &nbsp</td><td></b><CENTER><b>" . $row['PRODUCT'] . "</b></CENTER></td><br></tr>";
			 
			 echo  "<tr><td><b><font color=#8A0A8A>PRODUCT PRICE PER Kg IN RUPEES&nbsp &nbsp</td><td></b><CENTER><b>" . $row['PRODUCT_PRICE_PER_Kg_IN_RUPEES'] . "</b></CENTER></td><br></tr>";
			 echo"</table><BR>";
			?> 
			<form action="showEditForm.php">
			<input type="hidden" name="ID" value=" <?php echo $row['ID']; ?> " ></input>
            <button type="submit">EDIT</button>
			</form>
			<form action="processDeleteItem.php">
			<input type="hidden" name="ID" value=" <?php echo $row['ID']; ?> " ></input>
            <button type="submit">DELETE</button>
			</form>
			
			<?php
	
		 }		
	}else{
		echo "error with the SQL " . mysqli_error($link);
	}
} else {
	echo "Error connecting" . mysqli_connect_error();
}
ECHO "";
?>
			 
			 
			 
			 
			 
			 
 
 