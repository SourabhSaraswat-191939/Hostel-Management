<html>
<head>
    <style>
    div:first-child
        {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
        }
    .image
    {
        border:2px solid red;
        width: 55%;
        margin: 0;
        padding: 0;
    }
      div div 
        {
            float: left;
        }
        .info
        {
            width: 25%;
            margin:6%;
            padding: 7%;
            box-shadow: 50px -50px 1.3em #8888;
        }
    </style>
</head>
<body>

<?php

require_once("./connection.php");
$result=$conn->query("select * from Student_Pay_Info where `id`=$_POST[id]");
#var_dump($_POST);
while($data=mysqli_fetch_assoc($result))
{
echo "<div>";
echo "<div class='image'>";
echo "<img src='./UploadedBill/$data[bill]' alt='$data[name]' height=100% width=100%/>";
echo "</div>";
echo "<div class='info'>";
echo "<br><p><b>Name : ".$data['name'];
echo "<br><p>Roll No. : ".$data['roll'];
echo "<br><p>Room No. : ".$data['room'];
echo "<br><p>Hostel : ".$data['hostel'];
echo "<br><p>Department : ".$data['department'];
echo "<br><p>Gender : ".$data['gender'];
echo "<br><p>Email : ".$data['email'];
echo "<br><p>Mobile : ".$data['mobile'];
echo "<br><p>Date : ".$data['date'];
echo "<br><p>Approval : ".$data['approval'];
echo "</b><br><form method='post' action='mail.php'>";
echo "<input type='hidden' value='$data[id]' name='id'>";
echo "<input type='submit' name='action' value='Approved'>";
echo "<input type='submit' name='action' value='Rejected' style='margin-left:2%;'>";
echo "</form>";
}
$conn->close();
?>
    
    
</body>
</html>