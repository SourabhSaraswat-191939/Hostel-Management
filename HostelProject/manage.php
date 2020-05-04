<?php
session_start();
//var_dump($_SESSION);

if(!isset($_SESSION['login_name']) || isset($_POST['logout']))
{
    
    session_destroy();
    header("location:login.php");
    exit();
}





$conn=new mysqli("localhost","root","","Hostel_Project");
$sql = "SELECT * FROM `Student_Pay_Info` ORDER BY `Student_Pay_Info`.`id` desc";
$record=mysqli_query($conn,$sql);

?>
<html>
<head>
    <style>
        table{
            border-collapse: collapse;
            width:100%;
            color: #96459;
            font-family: monospace;
            font-size: 20px;
            text-align: left;
        }
        th{
            background-color: #d96459;
            color: white;
        }
        table tr td:first-child
        {
            margin: 0 !important;
            padding:0 !important;
            width:90px;
        }
        tr:nth-child(even) 
        {
            background-color: #f2f2f2
        }
        table tr td
        {
            height: 50px;
        }
        table tr td input
        {
            width: 100%;
            height: 100%;
            border: 0px;
            background: transparent;
            font-size: 1em;
        }
        .sticky
        {
            position: sticky;
            top: 0;
        }
        header
        {
/*            border: 2px solid red;*/
        }
    </style>
</head>
<body>
    
    
    <header>
    
    
    
    <?php
    echo "<form method='post' action='".htmlentities($_SERVER['PHP_SELF'])."'>";
    echo "<input type='submit' name='logout' value=\"Log Out\" style='margin-left:90%;width:70px;height:30px;'>";
    echo "<img src='cuh.png' style='float:left;height:50px;width:50px;margin-right:10px;'>";
    echo "</form>";
    ?>
    
    </header>
    
    
    
    
    <table  border="1">
    <tr > 
    <th style="padding-right:40%;width:20px;" class="sticky">S.No.</th>
    <th style="text-align:center;" class="sticky">NAME</th>
    <th style="text-align:center;" class="sticky">MOBILE</th>
<!--    <th>EMAIL</th>-->
<!--    <th>ROLL NO.</th>-->
    <th style="text-align:center;" class="sticky">ROOM NO.</th>
<!--    <th>DEPARTMENT</th>-->
<!--    <th>GENDER</th> -->
    <th style="text-align:center;" class="sticky">DATE OF SUBMISSION</th>
        
    <th style="text-align:center;" class="sticky">PAYMENT IMAGE</th>
    </tr>
        
    <?php
        $i=1;
    while($data=mysqli_fetch_assoc($record)){     
        
        echo "<tr>";
//        echo "<table>";
        
        echo "<td>".$i++."</td>";
        echo "<td>"."<input type='' value='$data[name]' disabled>"."</td>";
        echo "<td>"."<input type='' value='$data[mobile]' disabled>"."</td>";
        echo "<td>"."<input type='' value='$data[room]' disabled>"."</td>";
        echo "<td>"."<input type='' value='$data[date]' disabled>"."</td>";
        echo "<td>";
        echo "<form method='post' action='image.php'>";
        echo "<input type='hidden' value='$data[id]' name='id'>";
        echo "<button>"."<input type='submit' value='view form'>"."</button>"."</form>"."</td>";
        echo "</tr>";
        
}

$conn -> close();
?>
    
    </table>
<!--    <a href='logout.php'>Logout</a>-->
    
    
    <br/>
    <br/>
    <br/>
    <br/>
   
</body>
</html>
