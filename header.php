
<!Doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style input type="text/css">
    body{background-color:white;
      font-size :90%;}
    h1{background-color:white;text-align:center;padding:10px; }
    h2{background-color:white;text-align:center;padding:0px; }

    h3{background-color:white;white;text-align:center;padding:0px; }
    .form{ text-align: center;margin-left: 600px;width:auto;table-layout: auto;

    }

    form {background-color:white;white;Padding:0px;font-size:17px;text-align:center;}

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
    .btn-main {height: 33px;margin-left:550px;padding: 20;border-radius: 90px;width: 300px;display:flex;align-items:center;justify-content:center;background-color:#00acee;color:white;font-size: 16px;
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



#lema{
	display:flex;
	flex-wrap:wrap;
}
 #lema > div{
	 margin:30px;
	 padding:30px;
 }












    </style>
    <link rel ="stylesheet"href = "style1.css">
  </head>

<?php 
error_reporting(0);
?>

  <body>


    <div style ="float:left;margin-left:10px;background-color:#111">
      <?php include "nav.php"?>
    <img src ="imgs/cv.png"style ="width:100px;height:65px"></div>
	<div id = "lema"><ul>
	<!--<li><a href="#news">AfroCV</a>  </li> -->
  <li><a class="active" href=index2.php">CV</a></li>
  <li><a href="applicindex.php">Application Letter</a></li>
  <li><a href="index2.php">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul></div>



</body>
</html>
