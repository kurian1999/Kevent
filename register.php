
<?php
include "./include/condb.php";
 session_start();
  extract($_POST);
        
     
        
        if(isset($_POST['regbtn'])){
            //While using extract, no need to define variable use $nameAttribute from the form
            $ins="INSERT INTO `tbl_registration`( `email`, `User_type_id`, `password`) VALUES ('$email','$gender','$password')";
            $ins_res=mysqli_query($conn,$ins);
            if($ins_res){
                header("Location: ./login.html");
            }else{
                echo '<script language="javascript" type="text/javascript">';
				echo 'alert("Error")';
				echo '</script>';
            }
        }


      
        // Login check
    if(isset($_POST['lgbtn']))
    {
        // Empty check
        if (!empty($_POST['username']) and !empty($_POST['pass'])) {
            // Collecting values
            extract($_POST);
           
            //Check if mobile already exisit
            $checkLogin = "SELECT * FROM `tbl_registration` WHERE `email`='$username' and 'password'='$pass";
            $checkLoginResult = mysqli_query($connect, $checkLogin);
            $checkLoginCount = mysqli_num_rows($checkLoginResult);
            //No user exists
            if($checkLoginCount==1)
            {
                $userData=mysqli_fetch_assoc($checkLoginResult);
                $_SESSION['proAnalysisSession'] = session_id();
                $_SESSION['userName'] = $userData['user_name'];
                $_SESSION['userID'] = $userData['user_id'];
                header("Location:../EventManagementSystems/index.php");
                die();
            }
            else
            {
                $_SESSION['loginMessage'] = "User Login Failed";
                header("Location: ../EventManagementSystems/index.php");
                die();
            }
        } else {
            $_SESSION['loginMessage'] = "Please fill all fields";
            header("Location: ../EventManagementSystems/index.php");
            die();
        } 
    }
?>