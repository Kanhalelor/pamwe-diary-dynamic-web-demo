<?php 

$host="localhost";
$user="pohamba";
$password="4teeg6Q";
$db="PamweDB";

// connect to a database 
mysql_connect($host,$user,$password); mysql_select_db($db);

// check if no form was submitted 
if(isset($_POST['username'])){ $uname=$_POST['username'];
$password=$_POST['password'];
// create a query 
$sql="select * from users where user='$uname'AND Pass='$password' limit 1";
// query the database
$result=mysql_query($sql);
// check if there is data available 
if(mysql_num_rows($result)==1){ echo "Welcome"; exit(); }
// if incorrect data entered 
else{ echo "Wrong login details please try again!"; exit(); } } 
?>