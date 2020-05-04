<?php
       
require_once("./connection.php");
    if(isset($_POST['submit']))
    {
        $name = addslashes($_POST['name']);
        $roll = $_POST['roll'];
        $room = $_POST['room'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $department = $_POST['department'];
        $gender = $_POST['gender'];
        $hostel = $_POST['hostel'];
        $bill = $name."_".$hostel."_".$department ;
        $folder = $name.".png";
        if(isset($_FILES['bill']))
        { 
           $file_tmp = $_FILES['bill']['tmp_name'];
           if(! move_uploaded_file($file_tmp,"UploadedBill/".$folder))
           {
                echo 'Failed To Uplaod Image. Please try again';
            }
        }
        
        
        $query="select * from Student_Pay_Info where `mobile`=$mobile OR `name`='$name'";
//        $query="select * from Student_Pay_Info where `name`='$name'";

        $result=$conn->query($query);
        if($result)
        {
            
            $record=mysqli_fetch_array($result);
              if($record==null)
            {  
                if(strlen((string)$mobile)!=10)
                {   
                    echo "Please Enter Valid Digit Mobile Number.";
                    return;
                }
                else
                {

                  $que = "INSERT INTO `Student_Pay_Info` (`name`, `email`, `mobile`, `roll`, `room`, `department`, `gender`, `bill`,`hostel`) VALUES ('$name','$email',$mobile,$roll,$room,'$department','$gender','$folder','$hostel')";
                    $press=$conn->query($que);
                    if(!$press)
                    {
                        echo "Not submitted please try again later";
                    }
                    else
                    {
                    echo "Successfully Submitted";
                    }  
                    
                }                
            }
            else
            {
                echo "User Already Registered";
            }
        }
        else
        {
            echo "Invalid inputs";
        }
    }

        
        $conn->close();
?>