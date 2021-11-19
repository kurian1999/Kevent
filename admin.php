<?php
include "./include/condb.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="./styles/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />

</head>

<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>

    </label>
    <div class="sidebar">
        <header>Kevent
        </header>
        <ul>
            <li><a href="admin.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
            <li><a href="#"><i class="fas fa-link"></i>Shortcut</a></li>
            <li><a href="#"><i class="fas fa-stream"></i>Overview</a></li>
            <li><a href="#"><i class="fas fa-calendar-week"></i>Events</a></li>
            <li><a href="#"><i class="fas fa-question-circle"></i>About</a></li>
            <li><a href="#"><i class="fas fa-sliders-h"></i>Serives</a></li>
            <li><a href="#"><i class="fas fa-envelope"></i>Contact</a></li>
        </ul>
    </div>
    <table id="customers" cellpadding="50px" cellspacing="50px" >
        <tr>
            <th>Rid</th>
            <th>Email</th>
            <th>User_Type</th>
            <th>Name</th>
            <th>Mob</th>
            <th>Password</th>
        </tr>
        <?php
        $sql="SELECT `rid`, `email`, `User_type_id`, `name`, `Mob_num`, `password` FROM `tbl_registration`";
        $result=mysqli_query($conn,$sql);
        $resultcheck=mysqli_num_rows($result);
        if($resultcheck>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr><td>".$row["rid"]."</td><td>".$row["email"]."</td><td>".$row["User_type_id"]."</td><td>".$row["name"]."</td><td>".$row["Mob_num"]."</td><td>".$row["password"]."</td></tr>";
                
            }
            echo "</table>";
        }
        else{
            echo "0 Result";
        }
        $conn-> close();
        ?>

    </table>
</body>

</html>