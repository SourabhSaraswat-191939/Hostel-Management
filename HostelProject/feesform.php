<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<form action='<?php echo htmlentities($_SERVER["PHP_SELF"])?>' method="post" enctype="multipart/form-data">
    <div class="wrapper">
        <div class="title">
          Fee Submit Form
        </div>
        <div class="form">
           <div class="inputfield">
              <label>Student Name</label>
              <input type="text" class="input" name="name">
           </div>  
            <div class="inputfield">
              <label>Roll Number</label>
              <input type="text" class="input" name="roll">
           </div>  
           <div class="inputfield">
            <label>Room Number</label>
            <input type="text" class="input" name="room">
         </div>  
           <div class="inputfield">
            <label>Hostel</label>
            <div class="custom_select">
              <select name="hostel">
                <option value="">Select</option>
                <option value="UG BOYS">UG BOYS</option>
                <option value="UG GIRLS">UG GIRLS</option>
                <option value="PG BOYS">PG BOYS</option>
                <option value="PG GIRLS">PG GIRLS</option>
              </select>
            </div>
         </div> 
           <div class="inputfield">
            <label>Department</label>
            <div class="custom_select">
              <select name="department">
                <option value="">Select</option>
                <option value="B.Tech">B.Tech</option>
                <option value="B.voc">B.voc</option>
                <option value="M.C.A">M.C.A</option>
                <option value="Ph.d">Ph.d</option>
                <option value="M.Sc">M.Sc</option>
              </select>
            </div>
         </div> 
            <div class="inputfield">
              <label>Gender</label>
              <div class="custom_select">
                <select name="gender">
                  <option value="">Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
           </div> 
            <div class="inputfield">
              <label>Email Address</label>
              <input type="text" class="input" name="email">
           </div> 
          <div class="inputfield">
              <label>Mobile Number</label>
              <input type="text" class="input" name="mobile">
           </div> 
           <div class="inputfield">
              <label>Photo</label>
              <input type="file" placeholder="Bill Photo" name="bill">
           </div> 
          <!--<div class="inputfield">
              <label>Postal Code</label>
              <input type="text" class="input">
           </div>  -->
          <div class="inputfield terms">
              <label class="check">
                <input type="checkbox" id="terms" onclick="oncheck()">
                <span class="checkmark"></span>
              </label>
              <p>Agreed to terms and conditions</p>
           </div>
          <div class="inputfield">
              
          <input type="submit" value="Register" class="btn" name="submit" id="submit"><br>
            </div>          
            
            
            
            
            <?php    require_once("./register.php"); ?>





            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
<!--
             <h1 style="text-align:center;">
                 
                 <?php
//                if(isset($_GET['msg'])) echo $_GET['msg'];
             ?>
            </h1>-->
<!--
             <h1 id="parra"></h1>
              <script type="text/javascript">
                  var i=0;
                  var text="Thank You";
                  var speed = 1;
                  function typewriter(){
                      if(i<text.length){
                          document.getElementById('parra').innerHTML += text.charAt(i);
                          i++;
                          setTimeout(typewriter,speed);
                      }
                  }
              </script>-->
            
        <script>
            
            var checkBoxStatus=document.getElementById("terms");
            var submit=document.getElementById("submit");
            submit.style.display="none";
                
            function oncheck()
            {
                if(checkBoxStatus.checked)
                    {
                        submit.style.display="block";
                        
                    }
                else
                    {
                        submit.style.display="none";
                    }
                
            }
            
            
        </script>
            
            
            
        </div>
    </div>
</form>    
	
</body>
</html>
