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
	float:center;margin-left:100px;width:70%;font-size:20px
}
#px{
	float:center;margin-left:100px;width:70%;font-size:18px;color:green;font-weight:bold;
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
    $born = $_POST["born"];
    $gender = $_POST["gender"];
    $lives = $_POST["lives"];
    $email = $_POST["email"];
    $linkedin = $_POST["linkedin"];
    $facebook = $_POST["facebook"];
    $website = $_POST["website"];
	
	//work experience
    $position = $_POST["position"];
    $company = $_POST["company"];

    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    $achievements = $_POST["achievements"];


//work experience2
    $position2 = $_POST["position2"];
    $company2 = $_POST["company2"];

    $startDate2 = $_POST["startDate2"];
    $endDate2 = $_POST["endDate2"];
    $achievements2 = $_POST["achievements2"];

//work experience3
    $position3 = $_POST["position3"];
    $company3 = $_POST["company3"];

    $startDate3 = $_POST["startDate3"];
    $endDate3 = $_POST["endDate3"];
    $achievements3 = $_POST["achievements3"];


//work experience4
    $position4 = $_POST["position4"];
    $company4 = $_POST["company4"];

    $startDate4 = $_POST["startDate4"];
    $endDate4 = $_POST["endDate4"];
    $achievements4 = $_POST["achievements4"];







    //education
    
	$fieldOfStudy = $_POST["fieldOfStudy"];
	$startDateEdu = $_POST["startDateEdu"];
	$endDateEdu = $_POST["endDateEdu"];
    $degreeType = $_POST["degreeType"];
    $university = $_POST["university"];
    
    $majorCourses = $_POST["majorCourses"];
	
	
	//education 2
    
	$fieldOfStudy2 = $_POST["fieldOfStudy2"];
	$startDateEdu2 = $_POST["startDateEdu2"];
	$endDateEdu2 = $_POST["endDateEdu2"];
    $degreeType2 = $_POST["degreeType2"];
    $university2 = $_POST["university2"];
    
    $majorCourses2 = $_POST["majorCourses2"];
	
	
	
	
	
	
	
	
	
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
	
	
    $publications = $_POST["publications"];
    $driving = $_POST["driving"];



    //reference
    $reference1 = $_POST["reference1"];
    $reference1Phone = $_POST["reference1Phone"];
	$reference1Email = $_POST["reference1Email"];

    ?>






<?php  /*
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




   <i> <h3>Curriculum Vitae</h3></i>
    

<div id = "pe">
    PERSONAL INFORNATION__________________________________________________________________________________________<i class="fa fa-user"style = "color:#00acee"></i><br><br> </div>
<br>



<div id = "ps">
<?php if($name != NULL){
?>
 <i class="fa fa-user"style = "color:#00acee"></i>&nbsp <?php echo "$name <br><br>";?>
<?php
} ?>

<?php if($born != NULL){
?>
 <i class="fa fa-birthday-cake"style = "color:#00acee"></i>&nbsp <?php echo "$born <br><br>";?>
	<?php
} ?>  
	  
	  <?php if($lives != NULL){
?>
  <i class="fa fa-map-marker"style = "color:#00acee"></i> &nbsp<?php echo "$lives<br><br>";?>
  <?php
} ?>
  
  <?php if($email != NULL){
?>
  <i class="fa fa-envelope-square"style = "color:#00acee"></i>&nbsp <?php echo "$email<br><br>";?>
  <?php
} ?>
  
  
  
  <?php if($linkedin != NULL){
?>
  <i class="fa fa-linkedin"style = "color:#00acee"></i> &nbsp<?php echo "$linkedin<br><br>";?>
 <?php
} ?>

 
 <?php if($facebook != NULL){
?>
  <i class="fa fa-facebook"style = "color:#00acee"></i>&nbsp <?php echo "$facebook<br><br>"; ?>
  <?php
} ?>


  <?php if($website != NULL){
?>
  <i class="fa fa-globe"style = "color:#00acee"></i> &nbsp <?php  echo "$website<br><br>";?>

<?php
} ?>  
	</div><br><br> 






  <?php if($position != NULL || $company != NULL || $achievements != NULL){
?>
<div id = "pe">
   WORK EXPERIENCE__________________________________________________________________________________________<i class="fa fa-user"style = "color:#00acee"></i><br><br></div>

 
 <div id = "pd">
   From <?php echo "$startDate - $endDate"; ?> </div>



 
 <div id = "px"><br>
 
	<?php 

  echo "$position at $company<br><br>";
   ?> 
</div>
  
  
  
  
  
  
  
  
   <div id = "ps">
 
	<?php

  echo "$achievements<br><br>";
 ?> 
</div>
<?php
} ?>




 <?php if($position2 != NULL || $company2 != NULL || $achievements2 != NULL){
?>

<div id = "pd">
   From <?php echo "$startDate2 - $endDate2"; ?> </div>
<br>


 
 <div id = "px">
 
	<?php 

  echo "$position2 at $company2<br><br>";
   ?> 
</div>
  
  
 
  
   <div id = "ps">
 
	<?php

  echo "$achievements2<br><br>";
 ?> 
</div>
<?php
} ?>











<?php if($position3 != NULL || $company3 != NULL || $achievements3 != NULL){
?>

<div id = "pd">
   From <?php echo "$startDate3 - $endDate3"; ?> </div>
<br>


 
 <div id = "px">
 
	<?php 

  echo "$position3 at $company3<br><br>";
   ?> 
</div>
  
  
 
  
   <div id = "ps">
 
	<?php

  echo "$achievements3<br><br>";
 ?> 
</div>
<?php
} ?>








<?php if($position4 != NULL || $company4 != NULL || $achievements4 != NULL){
?>

<div id = "pd">
   From <?php echo "$startDate4 - $endDate4"; ?> </div>
<br>


 
 <div id = "px">
 
	<?php 

  echo "$position4 at $company4<br><br>";
   ?> 
</div>
  
  
 
  
   <div id = "ps">
 
	<?php

  echo "$achievements4<br><br>";
 ?> 
</div>
<?php
} ?>

























<?php if($degreeType != NULL || $fieldOfStudy != NULL || $university != NULL){
?>

<div id = "pe">
   EDUCATION____________________________________________________________________________________________________<i class="fa fa-user"style = "color:#00acee"></i><br><br></div>



<?php if($startDateEdu != NULL || $endDateEdu != NULL){
?>

<div id = "pd">
   From <?php echo "$startDateEdu -  $endDateEdu"; ?> </div>
<br>
<?php
} ?>



<div id = "px">
<?php

 
  echo "$degreeType in $fieldOfStudy, $university<br><br>";
  ?>
 </div>
  
  
  
  
  <div id = "ps">
<?php
  
  echo "$majorCourses<br><br>";
   ?> 
</div><br>
<?php
} ?>







<?php if($startDateEdu2 != NULL || $endDateEdu2 != NULL){
?>

<div id = "pd">
   From <?php echo "$startDateEdu2 -  $endDateEdu2"; ?> </div>
<br>
<?php
} ?>



<div id = "px">
<?php

 
  echo "$degreeType2 in $fieldOfStudy2, $university2<br><br>";
  ?>
 </div>
  
  
  
  
  <div id = "ps">
<?php
  
  echo "$majorCourses2<br><br>";
   ?> 
</div><br>























<?php if($shortCourses != NULL){
?>

<div id = "pe">
   SHORT COURSES__________________________________________________________________________________________<i class="fa fa-user"style = "color:#00acee"></i><br><br></div>



<div id = "ps">
<?php

echo "$shortCourses<br><br>";

 ?> 
</div><br>
<?php
} ?>







<?php if($languageSkill != NULL || $otherLanguageSkill != NULL || $communicationSkill != NULL ||     $communicationSkill1 != NULL || $managerialSkill != NULL || $jobRelatedSkill != NULL || $digitalSkill != NULL){
?>

<div id = "pe">
   PERSONAL SKILLS__________________________________________________________________________________________<i class="fa fa-user"style = "color:#00acee"></i><br><br></div>

<div id = "pe">
   LANGUAGES<br><br></div>


<div id = "ps">
 <div id = "pd">
   Mother Tongue <?php echo "$languageSkill"; ?> </div>
<br>



<?php

 echo "Other Languages<br><br>";

 echo "$otherLanguageSkill<br><br>";
 ?> 
</div>
 
 <div id = "pe">
   OTHER SKILLS<br><br></div>


<div id = "pe">
 
 Communication Skills<br><br></div>
   
</div>




<div id = "ps">
<?php
 echo "$communicationSkill<br><br>";
 echo "$communicationSkill1<br><br>";
 echo "$communicationSkill2<br><br>";
 echo "$communicationSkill3<br>";
 ?> 
</div>


 <div id = "pe">
 
   Managerial Skills<br><br></div>
   
</div>
   
   
  <div id = "ps">
<?php 
 echo "$managerialSkill<br><br>";
 echo "$managerialskill1<br><br>";
 echo "$managerialSkill2<br><br>";
 
 echo "$jobRelatedSkill<br><br>";
?> 
</div><br>



<div id = "pe">
   DIGITAL SKILLS<br><br></div>




<div id = "ps">
<?php
 
 echo "$digitalSkill<br><br>";
 echo "$digitalSkill1<br><br>";
 echo "$digitalSkill2<br><br>";
 ?> 
</div><br>
<?php
} ?>


<?php if($publications != NULL){
	?>

<div id = "pe">
   PUBLICATIONS<br><br></div>


<div id = "ps">
<?php
 echo "$publications<br><br>";
 ?> 
</div><br>
 <?php
} ?>
 
 
 <?php if($driving != NULL){
	?>
 
 <div id = "pe">
   DRIVING<br><br></div>



<div id = "ps">
<?php
 echo "$driving<br><br>";
 
 ?> 
</div><br>
<?php
 }?>


<?php if($reference1 != NULL || $reference1Email != NULL || $reference1Phone != NULL){
	?>

<div id = "pe">
   REFERENCES<br><br></div>



<div id = "ps">
<?php

 echo "Name :$reference1<br><br>";
 echo "Phone: $reference1Phone<br><br>";
 echo "Email: $reference1Email<br><br>";
	  	  
?>

<?php
}?>
	



<br><br></div>

                        __________________________________________________________________________________________<i class="fa fa-user"style = "color:#00acee"></i><br><br></div>





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
