
<!Doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style input type="text/css">
    body{background-color:white;
      font-size :30px;}
    h1{background-color:white;text-align:center;padding:10px; }
    h2{background-color:white;text-align:center;padding:0px; }

    h3{background-color:white;white;text-align:center;padding:0px; }
    .form{ text-align: center;margin-left: 600px;width:auto;table-layout: auto;font-size:12px

    }

    form {background-color:white;white;Padding:0px;font-size:12px;text-align:center;}

  /*  Use this if you don't need the table lines

   table {
        font-size :150%;
      border-collapse: collapse;
      width: 100%;

    }

    th, td {
      font-size :60%;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: white;
    }    */

    table{

      font-size :150%;
      border-collapse:collapse; border:1px solid black;collapse;
      width: 100%;

    }

    th, td {
    border:1px solid black;
      font-size :60%;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: white;
    }
    .btn-main {height: 33px;margin-left:560px;padding: 20;border-radius: 90px;width: 300px;display:flex;align-items:center;justify-content:center;background-color:#00acee;color:white;font-size: 16px;
	}
	.btn-fmain {height: 33px;margin-left:20px;padding: 20;border-radius: 90px;width: 300px;display:flex;align-items:center;justify-content:center;background-color:Green;color:white;font-size: 16px;
    }
	#WC {color:red;}
	
	
	
	
	
	ul {
  list-style-type: none;
  margin: 0;
  padding: 10px 20px;
  overflow: hidden;
  background-color:#333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #111; #04AA6D;
}





label,
textarea {
    font-size: .8rem;
    letter-spacing: 1px;
}
textarea {
    padding: 10px;
    max-width: 100%;
    line-height: 1.5;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-shadow: 1px 1px 1px #999;
}

label {
    display: block;
    margin-bottom: 10px;
}


 


    </style>
    <link rel ="stylesheet"href = "style1.css">
  </head>



  <body>


    <div style ="float:left;margin-left:10px;background-color:#111">
      <?php include "nav.php"?>
    <img src ="imgs/cv.png"style ="width:100px;height:65px"></div>
	<div><ul>
	<!--<li><a href="#news">AfroCV</a>  </li> -->
  <li><a class="active" href="index.php">CV</a></li>
  <li><a href="applicindex.php">Application Letter</a></li>
  <li><a href="index.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="login.php">Sign Up</a></li>
</ul></div>








<h3><form action="login.php" method ="post"><br><br>

<div style ="font-size:12px;">
<div style ="float:left;margin-left:10px;">
<img src ="imgs/cv3.PNG"style ="width:250px;height:200px"> <br></div><div>


<h3>Login </h3>



Email   :   <input type = "email" name = "email"><br><br>
Password  :  <input type = "password" name = "password"><br><br>
<!--Repeat Password  : <input type ="url" name = "facebook"><br><br> -->

<div>
    <div style ="float:center;margin-left:0px;">
<!--Submit : --><input type ="Submit" class="btn-main"><br><br><br> </h3>
</div></div><br>

<br><br>



<?php


include 'config.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

  if(!isset($_POST['email']) || !isset($_POST['password'])){
	  
     $output = json_encode(array('type' => 'error', 'text' => 'Please enter credentials!'));
     die($output);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];


    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{ //email validation
    $output = json_encode(array('type' => 'error', 'text' => 'Please enter a valid email!'));
    die($output);
}

if($conn->connect_error){
        $output = json_encode(array('type' => 'error', 'text' => 'Error connecting'.$conn->connect_error));
    die($output);
    }


    $sqlE = "select * from cv where email = '$email' and password = '$password';";
     //$sqlS = "select * from cv where email = '$email' and password = '$password';";



$resultE = $conn->query($sqlE);
if ($resultE->num_rows > 0) {
    // output data of each row
     if($columnE = $resultE->fetch_assoc()) {	
		
	

    session_start();

    $_SESSION["eid"]= $columnE["id"];
    $_SESSION["login_employer"]= $columnE["name"];
 $output = json_encode(array('type' => 'success', 'text' => 'Login successfull'.$_SESSION["login_employer"]));
    die($output);

}}



    $resultS = $conn->query($sqlS);

if ($resultS->num_rows > 0) {
    // output data of each row
     if($columnS = $resultS->fetch_assoc()) {



    session_start();
    $_SESSION["sid"]= $columnS["id"];
    $_SESSION["login_user"]= $columnS["name"];


    $output = json_encode(array('type' => 'success', 'text' => 'Login successfull'.$_SESSION["login_user"]));
    die($output);

}}else{
    $output = json_encode(array('type' => 'error', 'text' => 'Invalid credentials!'));
    die($output);
} 
   
}
