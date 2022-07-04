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
  <li><a class="active" href="index2.php">CV</a></li>
  <li><a href="applicindex.php">Application Letter</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul></div>








<h3><form action="cv.php" method ="post"><br><br>

<div style ="font-size:12px;">
<div style ="float:left;margin-left:10px;">
<img src ="imgs/cv3.PNG"style ="width:650px;height:780px"> <br><h1>Start Creating Your CV now</h1><span class = "btn-fmain" <a href ="index1.php"> Start </a></span><br><br></div><div>


<h3>1. Personal Information </h3>


Name :       <input type ="text" name = "name"><br><br>
Gender :
<input type ="radio" name = "gender" value = "Male"checked>Male
<input type ="radio" name = "gender" value = "Female">Female<br><br>
Born in :      <input type ="text" name = "born"><br><br>

Lives in  :  <input type ="text" name = "lives"><br><br>
<h3>2. Account Information </h3>
Email   :   <input type = "email" name = "email"><br><br>
Linkedin  :  <input type = "url" name = "linkedin"><br><br>
Facebook  : <input type ="url" name = "facebook"><br><br>
Website: <input type = "url" name = "website"><br><br>

   3. Work Experience <br><br>
Position: <input type = "text" name = "position"><br><br>
Company : <input type ="text" name ="company"><br><br>

Start Date: <input type = "date" name = "startDate"><br><br>
End date:  <input type = "date" name = "endDate"><br><br>

<label for="story">Achievements:</label>

<textarea id="story" name="achievements"
          rows="5" cols="33">

</textarea><br><br>



Work Experience2 <br><br>
Position: <input type = "text" name = "position2"><br><br>
Company : <input type ="text" name ="company2"><br><br>

Start Date: <input type = "date" name = "startDate2"><br><br>
End date:  <input type = "date" name = "endDate2"><br><br>

<label for="story">Achievements:</label>

<textarea id="story" name="achievements2"
          rows="5" cols="33">

</textarea><br><br>




<div>
<div style ="float:left;margin-left:10px;">
<img src ="imgs/cv4.PNG"style ="width:650px;height:1900px"> <br><!--Start Creating Your CV now --></div></div><br><br>











<h3>4. Education </h3><br>

Field Of Study: <input type = "text" name = "fieldOfStudy"><br><br>

<label for="cars">Degree Obtained</label>
  <select id="cars" name="degreeType">
    <option value="BSc">Bachelor's Degree</option>
    <option value="BA">Bachelor of Arts</option>
    <option value="MSc">Master's degree</option>
    <option value="MA">Master of Arts</option>
	 <option value="PhD">Doctoral Degree</option>
  </select>

<br><br>
University: <input type = "text" name = "university"><br><br>

Start Date: <input type = "date" name = "startDateEdu"><br><br>
End date:  <input type = "date" name = "endDateEdu"><br><br>

<label for="story">Courses Taken:</label>

<textarea id="story" name="majorCourses"
          rows="5" cols="33">

</textarea>
<br><br>



<h3>5. Short Courses </h3><br>

<label for="story">Short Courses:</label>

<textarea id="story" name="shortCourses"
          rows="5" cols="33">

</textarea>
<br><br>


 6. Languages<br><br>
 Mother Tongue: <input type = "text" name = "languageSkill"><br><br>

 Other Languages<br><br>
 <label for="story">Other Languages:</label>

<textarea id="story" name="otherLanguageSkill"
          rows="4" cols="33">

</textarea>
<br><br>


<h2>Manageria skills:</h2><br>  

<input type="checkbox" name="managerialSkill" value="Generate New Ideas">Generate new ideas<br><br>       
<input type="checkbox" name="managerialskill1" value="Desputes Handling">Desputes Handling<br><br>       
<input type="checkbox" name="managerialSkill2" value="Work under difficulties">Work under difficulties<br><br>     




<h2>Commication  skills:</h2><br> 

<input type="checkbox" name="communicationSkill" value="Straight talking">Straight talking<br> <br>     
<input type="checkbox" name="communicationSkill1" value="Non-verbal communication">Non-verbal communication<br><br>      
<input type="checkbox" name="communicationSkill2" value="Stress management">Stress management<br><br>     
<input type="checkbox" name="communicationSkill3" value="Emotion control">Emotion control<br><br>




<br><br>


<label for="story">Job Related skills:</label>

<textarea id="story" name="jobRelatedSkill"
          rows="5" cols="33">

</textarea>
<br><br>



<h2>Digital  skills:</h2><br> 

<input type="checkbox" name="digitalSkill" value="Excellent in handling information and content">Handling Information & Content<br><br>  
<input type="checkbox" name="digitalSkill1" value="Being Safe and Legal Online">Being Safe & Legal Online<br><br>      
<input type="checkbox" name="digitalSkill2" value="Excellent in Problem Solving">Good at Problem Solving<br><br>     
<input type="checkbox" name="digitalSkill3" value="Excellent in Emotion control">Good at Emotion control<br><br>











<label for="story">Publications:</label>

<textarea id="story" name="publications"
          rows="5" cols="33">

</textarea>
<br><br>

Publications : <input type ="text" name = "publications"><br><br>
Driving Licenses : <input type ="text" name = "driving"><br><br>

 Reference : <input type ="text" name = "reference1"><br><br>
Phone number: <input type ="tel" name = "reference1Phone"><br><br>
Email: <input type ="email" name = "reference1Email"><br><br>






</div></div><br>



 <div>
    <div style ="float:center;margin-left:0px;">
<!--Submit : --><input type ="Submit" class="btn-main"><br><br><br> </h3>
</div></div><br>



</div></div><br><br>




</body>
<div>
    <div style ="float:left;margin-left:0px;width:100%">
<?php include "footer.php" ?>

</div></div><br>





</html>
