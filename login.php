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
<!DOCTYPE html>
<html>
  <head>
    <title>Pamwe Diary</title>
    <meta charset="UTF-8" />
  </head>
  <link rel="stylesheet" href="./src/login.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap"
    rel="stylesheet"
  />

  <body>
    <div id="app">
      <div id="home" class="main-nav">
        <div class="title">
          Pamwe Diary
        </div>
        <ul>
          <li>
            <a href="./index.html">Home</a>
            <a class="active" target="_blank" href="./login.html">Login</a>
          </li>
        </ul>
      </div>
      <form action="#" method="post">
        <label for="Name">Username:</label>
        <input type="text" name="username" required />
        <label for="Name">Password:</label>
        <input type="password" name="password" required />
        <button type="submit">Login</button>
      </form>
      <div class="register">
        <p class="register-text">
          Don't have an Account? <a href="#">Register</a>
        </p>
      </div>
      <footer>
        <spam class="footer-text">
          All Rights Reserve
        </spam>
        <spam class="footer-text">
          Copyright &copy Pamwe Dairy 2021
        </spam>
      </footer>
    </div>
  </body>
</html>
