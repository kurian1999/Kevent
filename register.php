
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


      
        if(isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['rebtn']))
        {
            // $password=$password;
            //Check if mobile already exisit
            $checkLogin = "SELECT * FROM `tbl_registration` WHERE `houseno`='$userName' and `password`='$password' and `status`=1";
            $checkLoginResult = mysqli_query($conn, $checkLogin);
            $checkLoginCount = mysqli_num_rows($checkLoginResult);
            //Check Admin
            // $adminCheck="SELECT * FROM `tbl_admin` WHERE `username`='$userName' and `password`='$password'";
            // $adminCheckResult = mysqli_query($conn,$adminCheck);
            // $adminCheckCount=mysqli_num_rows($adminCheckResult);
            //No user exists
            if($checkLoginCount==1)
            {
                $userData=mysqli_fetch_assoc($checkLoginResult);
                $_SESSION['e-wardId'] = session_id();
                $_SESSION['fname'] = $userData['fname'];
                $_SESSION['rid'] = $userData['rid'];
                header("Location: ../../dashboard.php");
                die();
            }
            // elseif($adminCheckCount==1){
            //     $_SESSION['adminId'] = session_id();
            //     $_SESSION['aid']=$userData['aid'];
            //     header("Location: ../../admin.php");
            //     die();
            // }
            else
            {
                $_SESSION['loginMessage'] = "User Login Failed";
                header("Location: ../../index.php");
                die();
            }
        }

?>