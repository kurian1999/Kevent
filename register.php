
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

// login
      if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypass = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $sql = "SELECT * FROM `tbl_registration` WHERE `email`='$myusername' and `password`='$mypass'";
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
