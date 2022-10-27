<!DOCTYPE html>
 <html>
  <style>
  body { font-family: "Lato", sans-serif; }
   .sidenav { height: 100%;
      width: 0;
       position: fixed; z-index: 1; top: 0; left: 0; background-color:white;#D6EEEE;black;red; #00acee;#D6EEEE; overflow-x: hidden; transition: 1s; padding-top: 60px; }
        .sidenav a { padding: 8px 8px 8px 32px; text-decoration: none; font-size: 25px; color:black;red;#ff00ff; #818181; display: block; transition: 0.3s }
         .sidenav a:hover, .offcanvas a:focus{ color: #00acee red; }
         .sidenav .closebtn { position: absolute; top: 0; right: 25px; font-size: 36px; margin-left: 50px; }
          @media screen and (max-height: 450px){
            .sidenav {padding-top: 15px;} .sidenav a {font-size: 18px;}
             } </style>
              <body>
          <div id="mySidenav" class="sidenav">
                   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    
                       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                       <a href="index2.php">Home</a>
                       <a href="index2.php">CV</a>                
                       <a href="index2.php">Resume</a>
                       <a href="applicindex.php">Application Letter</a> 
					  <a href="index2.php">About</a>
                      
                      
					 
					 
                     </div>
                      <span style="font-size:26px;color:#00acee;red;font-weight: bold;cursor: pointer"onclick="openNav()">☰  </span>
                       <script> /* Set the width of the side navigation to 250px */ function openNav() { document.getElementById("mySidenav") .style.width="220px"; } function closeNav() { document.getElementById("mySidenav") .style.width = "0"; } </script> </body> </html>
