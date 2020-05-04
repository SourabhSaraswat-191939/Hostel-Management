<html>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<!--
    <div id="frm">
        <form method="post" action="account.php">
            Username <input type="text" name="username" required/><br> <br>
            Password <input type="password" name="password" required/>
            <input type="submit" value="Log In" id="btn">
        </form>
    </div>
-->
    <span style="font-size:40px;"><center><b>Hostel Manager</b></center></span>
<center><div style="margin-top:6%;box-shadow:10px 10px 10px 10px #8888;width:30%">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <center><img src="cuh.png" style="height:100px;width:100px;" id="icon" alt="User Icon" /></center><br>
    </div>

    <!-- Login Form -->
    <form method="post" action="account.php">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login" required><br><br>
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" required><br><br>
      <input type="submit" class="fadeIn fourth" value="Log In" required><br><br>
        
    </form>



  </div>
</div>
    </div>
    </center>
</body>
</html>
<?php 

session_start();
if(isset($_SESSION['login_name'])){
    header("LOCATION:manage.php");
}
else
    session_destroy();
?>

