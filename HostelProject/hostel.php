<?php
$name = addslashes($_POST['name']);
//$name=($name);
$roll = $_POST['roll'];
$room = $_POST['room'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$department = $_POST['department'];
$gender = $_POST['gender'];
$hostel = $_POST['hostel'];



//$conn = mysqli_connect("localhost","root","","Hostel_Project");
$conn=new mysqli("localhost","root","","Hostel_Project");
if(!$conn)
{
    exit();
}

$bill = $name."_".$hostel."_".$department ;
//$folder = "UploadedBill/".$bill.".png";
$folder = $name.".png";
if(isset($_FILES['bill']))
{
    
   echo $file_name = $_FILES['bill']['name']; 
   $file_tmp = $_FILES['bill']['tmp_name'];
  
    
   if(move_uploaded_file($file_tmp,"UploadedBill/".$folder)){
       
       echo '<br>Successfully Registered';
   }
    else{
        echo 'Failed To Registered. Please try again';
    }
    
}





//if(isset($_POST['submit']))
//{
//    $hostel = $_POST['hostel'];
//    $sql = $conn -> prepare("Insert Into Student_Pay_Info (hostel);
//    values (:hostel) ");
////    $conn -> beginTransaction();
//    $sql -> execute(array(':hostel'=>$hostel));
//    echo "<h2>hostel added succesfully</h2>";
//    $conn -> commit();  
//    $conn ->null;
//}




//if (mysqli_connect == true)
//{
//    echo "yes";
//}
//else
//{
//    echo "no";
//}
//    echo $_GET["ss"];



$que = "INSERT INTO `Student_Pay_Info` (`name`, `email`, `mobile`, `roll`, `room`, `department`, `gender`, `bill`,`hostel`) VALUES ('$name','$email',$mobile,$roll,$room,'$department','$gender','$folder','$hostel')";
//$press=mysqli_query($conn,$que);
$press=$conn->query($que);
if(mysqli_connect_error())
{
    echo "error";
    var_dump(mysqli_connect_error());
}
//if(!$press)
//{
////    echo "Not submitted";
////    var_dump($press);
////    echo "$conn";
//    var_dump($conn);
//}
//else
//{
//echo "submitted";
//}
$conn->null;
if(isset($_POST["submit"]))
{
 $msg = "Thank You";
 header('Location:index.php?msg='.$msg);  
}
?>




