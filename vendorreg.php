
<?php
include "./include/condb.php";
 session_start();
  extract($_POST);
        
     
        
        if(isset($_POST['venregbtn'])){
            //While using extract, no need to define variable use $nameAttribute from the form
            $ins="INSERT INTO `tbl_vendor_details`(`company_name`, `type`,`phone_no`, `state_name`, `district_name`, `Pincode`) VALUES ('$companyname','$type','$phname','$statename','$ctyname','$zip')";
            $ins_res=mysqli_query($conn,$ins);
            $insec="INSERT INTO `tbl_certicifation`( `tin_no`, `tin_no_expdate`, `vat_no`, `vat_no_expdate`, `servicetax_no`, `servicetax_no_expdate`) VALUES ('$tincerf','$tinexp','$vatcerf','$vatexp','$servicecerf','$serviceexp')";
            $ins_res2=mysqli_query($conn,$insec);
            // if($ins_res or $ins_res2){
            //     header("Location:./login.html");
            // }
            // else{
            //     echo '<script language="javascript" type="text/javascript">';
				// echo 'alert("Error")';
				// echo '</script>';
            // }
        }
        if(isset($_POST['venregbtn'])){
            //While using extract, no need to define variable use $nameAttribute from the form
            $ins="INSERT INTO `tbl_registration`( `email`, `password`) VALUES ('$username','$passvend')";
            $ins_res=mysqli_query($conn,$ins);
            if($ins_res){
                header("Location:./login.html");
            }
            else{
                echo '<script language="javascript" type="text/javascript">';
				echo 'alert("Error")';
				echo '</script>';
            }
        }

// login
      if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $pass = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $sql = "SELECT * FROM `tbl_registration` WHERE `email`='$username' and `password`='$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: ../EventManagementSystems/index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
       
?>
