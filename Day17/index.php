<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Using php</title>
    <link rel="stylesheet" href="../Form/assets/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.css"/>
    <link rel="stylesheet" href="../Form/assests/css/styles.css">
    <link rel="stylesheet" href="../Form/assests/css/responsive.css">
</head>
<body>

    <form action="" method="post">
        <label for="">Enter Your Name: </label> <br>
        <input type="text" placeholder="Enter your Frist name" name="fname">
        <br>
        <label for="">Enter Your Name: </label> <br>
        <input type="text" placeholder="Enter your Last name" name="lname">
        <br>
        <label for="check">Are you student?</label>
        <label for="checky">Yes </label> <input type="checkbox" id="checky" onclick="ShowDiv(this)">
        <label for="checkn">No </label> <input type="checkbox" id="checkn" onclick="HideDiv(this)">
        <br>
        <div id="show" style="display: none;">
            <label for="">Your Institute Name: </label> <br>
            <input type="text" placeholder="Institute Name" name="inst" value="">
            <br>
            <label for="">Which dept you are?: </label> <br>
            <input type="text" placeholder="CSE/EEE/Others" name="dept" value="">
            <br>
            <label for="">Institute ID: </label> <br>
            <input type="text" placeholder="18192103072" name="id" value="">
            <br>
            <label for="">Admission Year: </label> <br>
            <input type="text" placeholder="ex: 2019" name="year" value="">
            <br>
        </div>
        <div id="hide" style="display: none;">
            <p>so you are not a student. This form is not for you.<br>Thank you to stay with us!</p>
        </div>
        <input type="submit" value="SUBMIT">
    </form>

<script type="text/javascript">
    function ShowDiv(checky) {
        var show = document.getElementById("show");
        show.style.display = checky.checked ? "block" : "none";
    }
    function HideDiv(checkn) {
        var hide = document.getElementById("hide");
        hide.style.display = checkn.checked ? "block" : "none";
    }
</script>

<script src="../assets/bootstrap/bootstrap.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.js"></script>
<script src="../Form/assests/js/myscript.js"></script>
</body>
</html>
<?php
    echo "<br>";
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['inst']) && isset($_POST['id']) && isset($_POST['year']) && isset($_POST['dept'])){
        echo "<h3>Form Indformation: </h3>";
        echo "Hello".' ', $fristname = $_POST['fname'], " " ,$lastname = $_POST['lname'].'!';
        echo "<br> <h4>Here is your info:</h4>";
        echo "Frist Name:".' ', $_POST['fname'];
        echo "<br>";
        echo "Last Name:".' ', $_POST['lname'];
        $institute = $_POST['inst'];
        $departs = $_POST['dept'];
        $ids = $_POST['id'];
        $years = $_POST['year'];
        if(!empty($institute) && !empty($departs) && !empty($ids) && !empty($years)){
            echo "<br>";
            echo "Institution:".' ', $_POST['inst'];
            echo "<br>";
            echo "Department:".' ', $_POST['dept'];
            echo "<br>";
            echo "ID:".' ', $_POST['id'];
            echo "<br>";
            echo "Joining Year:".' ', $_POST['year'];
            echo "<br><br>";
        }
        else{
            echo "<br>";
            echo "Institution:".' ', $_POST['inst']="Not a Student";
            echo "<br>";
            echo "Department:".' ', $_POST['dept']="Not a Student";
            echo "<br>";
            echo "ID:".' ', $_POST['id']="Not a Student";
            echo "<br>";
            echo "Joining Year:".' ', $_POST['year']="Not a Student";
            echo "<br><br>";
        }
    }
?>
