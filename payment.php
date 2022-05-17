<?php
session_start();
$uname = $_SESSION['login_user'];
$eventprice = $_SESSION['price'];
?><html>

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        function pay_now() {
            jQuery.ajax({
                type: 'post',
                url: 'payment_process.php',
                data: "amt=" + 600,
                success: function(result) {
                    var options = {
                        "key": "rzp_test_9OisWYreh0Uw6B",
                        "amount": <?php echo $eventprice;?>000,
                        "currency": "INR",
                        "name": "KEvent",
                        "description": "KEvent Payment Gateway",
                        "image": "image/logo.svg",
                        "handler": function(response) {
                            jQuery.ajax({
                                type: 'post',
                                url: 'payment_process.php',
                                data: "payment_id=" + response.razorpay_payment_id,
                                success: function(result) {
                                    window.location.href = "thank_you.php";
                                }
                            });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                }
            });


        }
    </script>
</head>

<body onload="pay_now()">
</body>