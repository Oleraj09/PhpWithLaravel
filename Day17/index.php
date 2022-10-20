<?php
    if(isset($_POST['fname']) && isset($_POST['lname'])){
        echo "Full Name is: ";
        echo $fristname = $_POST['fname']; 
        echo " ";
        echo $lastname = $_POST['lname'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Using php</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.css"/>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Frist Name" name="fname" value="">
        <br>
        <br>
        <input type="text" placeholder="Last Name" name="lname" value="">
        <br>
        <br>
        <input type="submit" value="SUBMIT">
        <br>
    </form>


<script src="../assets/bootstrap/bootstrap.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.js"></script>
<script src="../assets/js/myscript.js"></script>
</body>
</html>
