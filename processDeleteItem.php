<?php
echo "<title>DELETE</title>";
include "db_connect.php";

//$id =3;
//mysql_select_db('farmer')or die(mysql_error());
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
//mysql_query("DELETE FROM farmer_table WHERE ID = '$id'") or die(mysql_error());


$itemToDelete = $_GET["ID"];
$sql_statement = "DELETE FROM `farmer`.`farmer_table` WHERE `farmer_table`.`ID` = $itemToDelete;";


if ($link) {
	$result = mysqli_query($link, $sql_statement);
	if ($result) {
		echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><B><H1><CENTER><p style=color:#0000A0>PRODUCT & IT'S PRICE DELETED SUCCESSFULLY</p></H1></CENTER>";
		 echo "<body background=blur5.png>";
		echo"<center> <b><a href=farmer_details.php>VIEW DETAILS</a></CENTER></b>";
		ECHO"<BR><center> <b><a href=DELETE.PHP>GO BACK</a></CENTER></b>";
	}else{
		echo "error with the SQL " . mysqli_error($link);
	}
} else {
	echo "Error connecting" . mysqli_connect_error();
}
$row
?>
<script type="text/javascript">
    window.history.forward();
    function noBack()
    {
        window.history.forward();
    }
</script>

<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
