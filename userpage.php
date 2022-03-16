 <?php
    include "./include/condb.php";
    session_start();
    $uname = $_SESSION['login_user'];
    if (isset($_SESSION["sessionID"]) != session_id()) {
        header("Location: ./index.php");
        die();
    } else {
    ?>
     <!DOCTYPE html>
     <html lang="en">

     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>User</title>
         <link rel="stylesheet" href="./styles/user.css">
         <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
         <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Roboto:400" />
         <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

     </head>

     <body>
         <!-- <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>

    </label>  -->
         <div class="sidebar">
             <header>Kevent
             </header>
             <ul>
                 <li><a href=""><i class="fas fa-qrcode"></i>Dashboard</a></li>

                 <li><a href="" style="transition: 1.6s;"><i class="fas fa-stream"></i>Vendor</a></li>
                 <li><a href="" style="transition: 1.6s;"><i class="fas fa-calendar-week"></i>Book Calender</a></li>
                 <li><a href="./booking.php" style="transition: 1.6s;"><i class="fas fa-stream"></i>Booking </a></li>
                 <li><a href="./logout.php"><i class="fas fa-question-circle"></i>Logout</a></li>

             </ul>
         </div>
     <?php
    }
        ?>