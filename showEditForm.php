
<?php
$ID  = $_GET['ID'];

echo "<title>EDIT PRICE</title>";
include "db_connect.php";
if ($link) {
 $sql_statement = "SELECT ID, PRODUCT, PRODUCT_PRICE_PER_Kg_IN_RUPEES from farmer_table WHERE ID = '$ID' ";
$result= $link-> query($sql_statement);
if ($result){
	while ($row = $result->fetch_assoc()) {
		$PRODUCT = $row['PRODUCT'];
		$PRODUCT_PRICE_PER_Kg_IN_RUPEES = $row['PRODUCT_PRICE_PER_Kg_IN_RUPEES'];
		
	
}}else {
	echo "There is problem". mysqli_error($link);
} }else {
	echo "Error connecting" . mysqli_connect_error();
}
ECHO "";
?>


<body background="AEDD2.PNG">
<div class="form-container">

<h1><CENTER><br><br><br><br><p style="color:#0A8A0A;"><U>EDIT PRODUCT PRICE</U></p></h1>

<CENTER><form action="processEditItem.php" AUTOCOMPLETE="OFF">
<input type ="hidden" name = "ID" value="<?php echo $ID ?>" ></input>
          <h2><b><p style="color:#8A0A8A;">PRODUCT</p></h2>&nbsp <?php echo $PRODUCT;?></b>
		  
		  
		 <input type="hidden" name="PRODUCT"value="<?php echo $PRODUCT;?>"></input> 
		  
		  <h2><b><p style="color:#8A0A8A;">PRODUCT PRICE PER Kg IN RUPEES</p></h2></b>&nbsp&nbsp&nbsp&nbsp&nbsp <input type="bigint"
 name="PRODUCT_PRICE_PER_Kg_IN_RUPEES"style="text-align: center; outline-color: #FF32FF" value="<?php echo $PRODUCT_PRICE_PER_Kg_IN_RUPEES;?>"></input><br><br>
<button type="submit">SAVE</button>
<center> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp  <b><a href="farmer_details.php">BACK</a></b></center>
</form>
</div>
