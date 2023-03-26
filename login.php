<HEAD>
<title>DIGITALFARMER.COM</title>
</HEAD>
<?php
include "db_connect.php";


 ?>



<body background="agri2.png">


<form action="AUTHENTICATION.PHP" AUTOCOMPLETE="OFF">
  


 <h1><center><br><br><br><br><br><p style="color:#0000A0" >WELCOME TO DIGITALFARMER WEBSITE </p></center></h1>
 <h3><center>PHONE NUMBER: <input type="bigint"  name="PHONENUMBER" placeholder="eg: 857XXXX356" style="text-align: center; outline-color: #0000A0"> </center><br>
 <center>YOUR PASSCODE: <input type="password"  name="PASSWORD" placeholder="eg: 56XXXX56" style="text-align: center; outline-color: #0000A0"> </center><BR></h3>
 <center><input type="submit" value="Login" style=" background-color: #0000A0 ; color:#FFFFFF" ></center>
   
  
 

 
</form>
<center> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp  <b><a href="NEWUSER.php">NEW USER SIGNUP</a></b></center>
 
 <script type="text/javascript">
    window.history.forward();
    function noBack()
    {
        window.history.forward();
    }
</script>

<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">