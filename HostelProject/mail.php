<?php

require_once("./connection.php");
$result=$conn->query("select * from Student_Pay_Info where `id`=$_POST[id]");
$action = $_POST['action'];
while($data=mysqli_fetch_assoc($result))
{
    $name= $data['name'];
    $email =  $data['email'];
} 
$to = $email;
$subject = "Form :" . "Hostel CUH for Hostel Fee" ;
$message = "Subject:".$subject."\n Dear Student the form you fill online for fees payment has been <b>".$action."<b> .For further information contact your Warden. ";
$header = "from:sourabh@bytecodelearners.in \r\n   ";

if(isset($_POST['action']))
{
        if($action=='Rejected')
        {
            mysqli_query($conn,"DELETE FROM Student_Pay_Info WHERE `id` =$_POST[id]");
//            echo " Form Rejected Message Sent<br>";
//            echo " Row Deleted Successfuly.";
            header("location:manage.php");
            
        } 
        else
        {
            $ss = 'yes';
             $conn->query("UPDATE `Student_Pay_Info` SET `approval`='Yes' WHERE `id`=$_POST[id]");
            echo "Successful";
        }
}




$mymail = mail($to,$subject,$message,$header);
$conn -> close();
?>