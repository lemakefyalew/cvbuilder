<!Doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <title></title>
    <style input type="text/css">
    body{
      font-size :130%;}
    h1{background-color:white;text-align:center;padding:15px; }
    h2{background-color:white;text-align:center;padding:0px; }

    h3{background-color:white;text-align:center;padding:0px; }

    form {background-color:white;#D6EEEE;Padding:0px;font-size:17px;text-align:center;}

  /*  Use this if you don't need the table lines

   table {
        font-size :150%;
      border-collapse: collapse;
      width: 100%;

    }

    th, td {
      font-size :60%;
	  font-weight:normal;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #D6EEEE;
    }    */
#footer{background-color:white;#D6EEEE;color:red;}


#pe{
	float:center;margin-left:20px;font-weight:bold;width:700%;color:#00acee;font-size:18px;
}
#pd{
	float:center;margin-left:20px;font-weight:nornal;width:70%;color:#00acee;font-size:18px;
}

#ps{
	float:center;margin-left:50px;width:90%;font-size:22px;text-align:justify;
}
#px{
	float:center;margin-left:50px;width:70%;font-size:18px;color:green;font-weight:bold;
}

.pupet{
	height: 33px;margin-left:100px;padding: 20;border-radius: 90px;width: 300px;display:flex;align-items:center;justify-content:center;background-color:orange;color:white;font-size: 16px;
}
	@media print {
		.pupet{
			display : none;
		}
	}



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
      background-color: #D6EEEE;
    }
    </style>
  </head>


<?php 
error_reporting(0);
?>


  <body>

<?php //include "price.php" ?>






    <?php




    //Personal Information
    $name = $_POST["name"];
	$letterto = $_POST["letterto"];
    $vacancyPosition = $_POST["vacancyPosition"];
	
	$vacancyDate = $_POST["vacancyDate"];
	$ApplicationDate = $_POST["ApplicationDate"];
	$postionType = $_POST["postionType"];
	$workexperience = $_POST["workexperience"];
    $gender = $_POST["gender"];
    $lives = $_POST["lives"];
    $email = $_POST["email"];
	 $phone = $_POST["phone"];
    $linkedin = $_POST["linkedin"];
    $facebook = $_POST["facebook"];
    $website = $_POST["website"];
	
	//work experience
    $position = $_POST["position"];
    $company = $_POST["company"];
	$experienceNumber = $_POST["experienceNumber"];

    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    $achievements = $_POST["achievements"];


//work experience2
    $position2 = $_POST["position2"];
    $company2 = $_POST["company2"];

    $startDate2 = $_POST["startDate2"];
    $endDate2 = $_POST["endDate2"];
    $achievements2 = $_POST["achievements2"];



    //education
    
	$fieldOfStudy = $_POST["fieldOfStudy"];
	$startDateEdu = $_POST["startDateEdu"];
	$endDateEdu = $_POST["endDateEdu"];
    $degreeType = $_POST["degreeType"];
    $university = $_POST["university"];
    
    $majorCourses = $_POST["majorCourses"];
	
	//short courses
    $shortCourses = $_POST["shortCourses"];
	
	//languages
    $languageSkill = $_POST["languageSkill"];

    $otherLanguageSkill = $_POST["otherLanguageSkill"];
	//communication Skill
    $communicationSkill = $_POST["communicationSkill"];
	$communicationSkill1 = $_POST["communicationSkill1"];
	$communicationSkill2 = $_POST["communicationSkill2"];
	$communicationSkill3 = $_POST["communicationSkill3"];
	//Managerial skills
    $managerialSkill = $_POST["managerialSkill"];
	$managerialskill1 = $_POST["managerialskill1"];
	$managerialSkill2 = $_POST["managerialSkill2"];
	
	
	
    $jobRelatedSkill = $_POST["jobRelatedSkill"];


    //digital skills
    $digitalSkill = $_POST["digitalSkill"];
	$digitalSkill1 = $_POST["digitalSkill1"];
	$digitalSkill2 = $_POST["digitalSkill2"];
	$digitalSkill3 = $_POST["digitalSkill3"];
	
    $publications = $_POST["publications"];
    $driving = $_POST["driving"];



    //reference
    $reference1 = $_POST["reference1"];
    $reference1Phone = $_POST["reference1Phone"];
	$reference1Email = $_POST["reference1Email"];

    ?>






<?php 
/*
include 'config.php';



if($_SERVER['REQUEST_METHOD']=='POST'){

    $sql = "INSERT INTO cv (name,gender,born,lives,email,linkedin,facebook)
VALUES ('$name', '$gender', '$born','$lives', '$email', '$linkedin','$facebook')";

if ($conn->query($sql) === TRUE) {
    ?>



<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}else{
      header("location : index.php");
}
*/
?>




   <i> <h3>Application Letter</h3></i>
    

<div id = "pe">
    _____________________________________________________________________________________________________________________________________________<br><br> </div>
<br>

<div id = "px">
<?php if($letterto != NULL){

	echo "To $letterto <br><br>";
	echo "$ApplicationDate";
}
?>&nbsp Dear Sir or Madam,<br><br>
</div>
<div id = "ps">
<?php if($vacancyPosition != NULL){
?>

 By means of this letter I would like to inquire about the possibility of filling an outstanding job position at <b><?php echo "$letterto";?>.</b> My preference would be to fill the position of <b> <?php echo "<b>$vacancyPosition </b>";?></b> vacancy announcement dated <?php echo "<b>$vacancyDate </b> <br><br>";?>
 
 <?php
}?>
 
 
 <?php if($experienceNumber != NULL && $position != NULL && company != NULL){
?>
 
 I am currently working as <b><?php echo "$position";?>&nbsp </b> at <b> <?php echo "$company";?>&nbsp </b> in Addis Ababa. In this position I am responsible for carrying position related works  over the past <?php echo "$experienceNumber"; ?> years, I have gained ample experiences in the field of different areas from Starter to  to <?php echo "$position";?> . 
 <?php
 }?>
 
 
 
 <?php if($managerialSkill != NULL ||$managerialskill1 != NULL || $managerialSkill2 != NULL){
	 ?>
 
 I would describe myself as someone who <?php echo "$managerialSkill, "; ?>
 <?php echo "$managerialskill1 and "; ?> <?php echo "$managerialSkill2."; ?> 
 <?php
 }?>
 
 
 
 
 I have graduated Maximum degree from <b><?php echo "$university";?></b> with  <b><?php echo "$degreeType";?></b> and have other degrees. In addition to my university education, I have take a short courses such as to support my career.<br><br> Combined with my experience, I believe that I can make a valuable contribution to your organization. I see the position of <?php echo "$vacancyPosition";?> as the perfect next step in my career. In the position of <?php echo "$vacancyPosition";?> I expect to be able to develop myself further as a professional.
 
 <?php if($communicationSkill != NULL ||$communicationSkill1 != NULL || $communicationSkill2 != NULL){
	 ?>
 
 
 
 I'm exellent in communication <?php
 echo "$communicationSkill,"; ?>
 <?php echo "$communicationSkill1, ";?>
 <?php echo "$communicationSkill2, ";?>
 <?php echo "$communicationSkill3 .<br>";
 ?> 
 
 <?php
 }?>
 
 
 
 
 <?php if($digitalSkill != NULL ||$digitalSkill1 != NULL || $digitalSkill2 != NULL){
	 ?>
 One primary skill I can't hide here is my digital skill. I'm best at 
 <?php
 }
 ?>
 
 
 <?php if($digitalSkill != NULL){?>
 <?php echo "$digitalSkill "; ?>
 <?php
 }?>




 <?php if($digitalSkill1 != NULL){?> 
 <?php echo ", $digitalSkill1 "; ?>

 <?php
 }?>
 
 
 
 <?php if($digitalSkill2 != NULL){?> 
 <?php echo ", $digitalSkill2, "; ?>
 <?php
 }?>
 
 
 
 
 <?php if($digitalSkill3 != NULL){?> 
 <?php echo " and $digitalSkill3.<br><br>";?>
 
 
 
 <?php
 }?>
 
 
 
 
 
 
 
 
 
 I would like to further explain my motivation for the position of <?php echo "$vacancyPosition";?>&nbsp during a personal meeting. You can reach me either by email via <?php echo "$email "; ?> <?php if($phone != NULL){?> or phone <?php echo "$phone."; ?>.
 <?php
 }?>
 
 Thank you for your consideration. I look forward to hearing from you.
 
 </div><br><br><br>
 <div id = "px">
 Sincerely,<br><br><?php echo "$name<br><br>";?>
 Email: <?php echo "$email<br><br>";?>
 Phone :<?php echo "$phone<br><br>";?>
 </div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 <br><br>

 
</div><br>
 
 
 
 
 
<?php
 ?>

 	  

</div>

<div class ="pupet">
<button onclick = "window.print()"> Print </button>

</div>


<br><br><br>
<!--
<div id ="footer">
  <br>

<ul> &copy Engineering Surveying Software 2022</ul>
<br>
</div>

-->

</body>
</html>
<!--</body>
</html>
 -->
