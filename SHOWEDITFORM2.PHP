<STYLE>
.boxed {
  border: 4px solid #0A8A0A ;
  
}
</STYLE>
<?php
include "db_connect.php";

$ID  = $_GET['ID'];
if ($link){
	$sql_statement = "SELECT ID, FARMER_NAME, PHONE_NUMBER, LOCATION, PINCODE from signup_table WHERE ID = '$ID'";
	$result= $link-> query($sql_statement);
	if ($result){
		while ($row = $result->fetch_assoc()) {
			$FARMER_NAME = $row['FARMER_NAME'];
			$PHONE_NUMBER = $row['PHONE_NUMBER'];
			$LOCATION = $row['LOCATION'];
			$PINCODE = $row['PINCODE'];
			
		}}ELSE {
		echo "There is problem". mysqli_error($link);
}}else {
	echo "Error connecting" . mysqli_connect_error();
}
	

?> 

<body background="AEDD3.PNG">
<div class="form-container">
<div class="boxed">
  <h1><center><?php ECHO "<p style=color:#0000A0> YOUR PHONE NUMBER / ID : $PHONE_NUMBER</p>";?></h1></center>
</div>

<BR><BR><h1><CENTER><p style="color:#0A8A0A;"><U>EDIT YOUR DETAILS</U></p></h1>

<CENTER><form action="EDITDETAILS.PHP" AUTOCOMPLETE="OFF">

<input type="HIDDEN" name="ID" value="<?php ECHO $ID;?>"></input>

<h2><b><p style="color:#8A0A8A;">YOUR NAME</p></h2></b>&nbsp&nbsp&nbsp&nbsp&nbsp<input type ="TEXT" style="text-align: center; outline-color: #FF32FF" name = "FARMER_NAME" value = "<?php ECHO $FARMER_NAME;?>"></input>
<h2><b><p style="color:#8A0A8A;">LOCATION</p></h2></b>&nbsp&nbsp&nbsp&nbsp&nbsp<input type ="TEXT"style="text-align: center; outline-color: #FF32FF" name = "LOCATION" value = "<?php ECHO $LOCATION;?>"></input>
<h2><b><p style="color:#8A0A8A;">PINCODE</p></h2></b>&nbsp&nbsp&nbsp&nbsp&nbsp<input type ="TEXT"style="text-align: center; outline-color: #FF32FF" name = "PINCODE" VALUE = "<?php ECHO $PINCODE;?>"></input><BR><BR><BR>
<button type="submit">SAVE</BUTTON>
</form>
</DIV>

<center> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp  <b><a href="farmer_details.php">BACK</a></b></center>












          