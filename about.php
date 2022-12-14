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
    .btn-main {height: 33px;margin-left:560px;padding: 20;border-radius: 90px;width: 300px;display:flex;align-items:center;justify-content:center;background-color:orange;color:white;font-size: 16px;
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
  <li><a href="#contact">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="login.php">Sign Up</a></li>
</ul></div>









<h3>About CV builder</h3>

<h4> CV builder is a project aimed to help students or any one who wants to write their cv quickly.
It also help to write application letters for job applications or scholarship grants fast. </h4> <br>

<p>A CV (curriculum vitae) is a short list of facts about your education, work history, skills and experience. It is often the first contact you’ll have with an employer, so it’s important to get it right. Use the online CV builder to create, edit, download and print a CV.
My CV builder project clearly do the following when building CV/
</p>


<h3>Presenting your CV</h3>
<li>print your CV on good-quality, white A4 paper, in a clear font </li><br>
<li>put your name at the top of the page – not curriculum vitae or CV</li><br>
<li>include your address, telephone number and email address at the top</li><br>
<li>show your up-to-date career history , including work experience and employment history</li><br>
<li>present the content clearly and concisely, making it easy to read and understand</li><br>
<li>use positive language</li><br>
<li>aim for no more than  two pages</li><br>
<li>ask someone to proofread it to check your spelling and grammar</li><br>

<h3>Using CV builder</h3><br>
<p> You can send your CV to a company with a covering letter or email asking if they have any current or future vacancies. You can find names and addresses of companies on the internet, in newspapers, or in trade or telephone directories.
You can use your CV to help you remember all the dates and information each time you fill in an application form, apply for a job by phone or before a job interview. You can also leave a copy with the interviewer(s) if they do not already have one.
Recruitment/employment agencies usually ask to see your CV before you register with them.</p><br>
<h3>Covering letter for your CV</h3><br>
<p>It is good manners and professional courtesy to enclose a covering letter with your CV, giving the job reference and repeating your contact details.
While your CV gives the facts about your employment, the covering letter might explain why you are interested in the job and why it's just right for you. You must try to give the prospective employer a reason to want to read your CV.
List the skills you have that are relevant to the job. If the advert mentions motivation give an example to show how you’re motivated. Give real-life experiences or personal qualities which could make you stand out from other candidates.</p><br>
<h3>Team Members</h3><br>
<p>This project is built by</p><br>
<p>Lema Kefyalew</p><br>
<p>Selamawit Birhanu</p><br>
<h3>Technologies used</h3><br>
<p>PHP, CSS, HTML and JavaScripts languages are used in this project and anyone can use the source code and update according to their wishes.
<h3>Risks</h3><br>

<p>If you can’t properly feed your inputs given in the input fields, it’s it’s your risk that you will get a garbage output and ugly CV output. As far as you feed your data properly, it’s safe to use this application.
</p><br>
<h3>Existing Solutions</h3><br>

<p>There are alot of apps that can be used as CV builders. Europass is the one and most popular one.</p><br>









</div></div><br><br>




</body>
<div>
    <div style ="float:left;margin-left:0px;width:100%">
<?php include "footer.php" ?>

</div></div><br>





</html>
