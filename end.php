<?php
include "db_connect.php";
$PRODUCTfromform =$_GET["PRODUCT"];
echo $PRODUCTfromform;
 echo "<h2> The Farmers who sells $PRODUCTfromform</h2>";
$sql = "SELECT PRODUCT, FARMER_NAME, PHONE_NUMBER, PRODUCT_PRICE_PER_Kg_IN_RUPEES, LOCATION, PINCODE FROM farmer_table WHERE PRODUCT LIKE '%" . $PRODUCTfromform . "%'";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
 echo "<br>" ."PRODUCT:" . "&nbsp;" . $row["PRODUCT"] . "<br>" . "FARMER NAME:" . "&nbsp;" . $row["FARMER_NAME"] . "&nbsp;"  . "<br>" ."PHONE NUMBER:" . "&nbsp;" . $row["PHONE_NUMBER"] . "<br>" . "PRODUCT PRICE/Kg:" . "&nbsp;" . $row["PRODUCT_PRICE_PER_Kg_IN_RUPEES"] . " Rs" ."<br>" . "LOCATION:" . "&nbsp;" . $row["LOCATION"] . "<br>" ."PINCODE:" . "&nbsp;" . $row["PINCODE"] . "<br>" . "<br>";
	
  }
} else {
  echo "0 results";
}
include "tableoutput.php";
?>

