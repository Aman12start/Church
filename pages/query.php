<?php

// Insert the queery
include_once( 'connection.php');
session_start();

$redirectPageUrl='http://localhost/our/pages/contact.php';

if(isset($_POST['sub']))
{
   $name = $_POST['name'];
   $email =$_POST['email'];
   $phone =$_POST['phone'];
   $message = $_POST['message'];

//    echo "<pre>"; print_r($_POST);
//    die;

   if($name=='')
   {
        $_SESSION['errMsg']='Required Full Name';
        header("Location: $redirectPageUrl");
        //echo "Required Full Name";
   }
   else{
        $checkUserExist="SELECT * FROM contact WHERE email='".$email."' OR phone='".$phone."'";
        $checkData=mysqli_query($conn,$checkUserExist);
        if(mysqli_num_rows($checkData) > 0)
        {
            $_SESSION['errMsg']='User Already Exist';
             header("Location: $redirectPageUrl");
            //echo "User Already Exist";
        }
        else{   
            $sql="INSERT INTO `contact`(`name`,`email`,`phone`,`message`) values('$name','$email','$phone','$message')" ;
            // echo $sql; die;
            if(mysqli_query($conn,$sql))
            {
                $_SESSION['msgScs']='User Added Successfully';
                 header("Location: $redirectPageUrl");
            }
            else{
                $_SESSION['errMsg']='Something Went Wrong Try Later!';
                header("Location: $redirectPageUrl");
                //echo "Something Went Wrong Try Later!";
            }

        }
   }

//echo $total;

}   

//DISplay
 

$query = "SELECT * FROM `contact`";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);


//delete

if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    $id =  base64_decode(base64_decode($_GET['id']));
    //.$_GET['action']; die;
    $redirectPageUrl = 'http://localhost/our/pages/display.php';
    
    $sql=" DELETE FROM `contact` WHERE `sno` = '$id'";
    // echo $sql; die;
    if(mysqli_query($conn,$sql)){
        echo "<script> alert('Record Deleted') </script>";
        $_SESSION['msgScs']='User Delete Successfully';
        header("Location: $redirectPageUrl");
    }else{
        $_SESSION['errMsg']='Something Went Wrong Try Later!';
        header("Location: $redirectPageUrl");
        //echo "Something Went Wrong Try Later!";
    }

} 

            // $query = "DELETE FROM `contact`";          yh poori table delete kr dege
                // $data = mysqli_query($conn,$query);


//UPDATE 



if(isset($_GET['action']) && $_GET['action'] == 'update'){
// echo "hiiiiiiiiiiiiiiii"; die;
$id = base64_decode(base64_decode($_GET['id']));
$query = "SELECT * FROM contact WHERE sno = $id";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
// echo $total; die;
$result = mysqli_fetch_assoc($data);
// print_r($total); die;
}

if(isset($_POST['action']) && $_POST['action'] == 'update'){
    // echo "<pre>"; print_r($_POST); die;
    $name      = $_POST['name'];
    $email     = $_POST['email'];
    $phone     = $_POST['phone'];
    $message   = $_POST['message'];
    $id        = base64_decode(base64_decode($_POST['id']));
             
    $query = "UPDATE contact set name='$name', email='$email',phone='$phone',message='$message' WHERE sno ='$id'" ;

    //$query = "INSERT INTO strudent_id values ('$fname' ,'$lname','$pass' ,'$cpass','$email','$gender' ,'$mobile','$textarea')";
    $data = mysqli_query($conn,$query);
    if($data){
        $_SESSION['msgScs']='Record Updated';
    header("Location:display.php");
   
    }
    else{
            echo "failed";
    }

}

?>