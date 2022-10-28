<?php
if (isset($_POST['submit'])) {
    // Check number values
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        // Calculate total
        if ($_POST['operation'] == 'summation') {
            $total = $_POST['number1'] + $_POST['number2'];
        }
        if ($_POST['operation'] == 'substraction') {
            $total = $_POST['number1'] - $_POST['number2'];
        }
        if ($_POST['operation'] == 'multiplication') {
            $total = $_POST['number1'] * $_POST['number2'];
        }
        if ($_POST['operation'] == 'division') {
            $total = $_POST['number1'] / $_POST['number2'];
        }
        if ($_POST['operation'] == 'modulus') {
            $total = $_POST['number1'] % $_POST['number2'];
        }

    } else {

        // Print error message to the browser
        echo 'Numeric values are required';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Calculator - Sumation, Substraction, Multiple, Division and Modulus!!</title>
    <link rel="stylesheet" href="assests/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assests/css/styles.css">
</head>

<body>
    <menu>
        <section class="Calculator">
            <div class="container bg-dark text-white text-center">
                <div class="row">
                    <div class="col-12 pt-3">
                        <h3 class="title text-uppercase p-3">MondolOZ - A Simple Calculator!!</h3>
                        <hr>
                    </div>
                </div>
                <div class="card text-center pb-2">
                    <div class="card-body pb-3">
                        <div class="result-btn">
                            <p class="pt-3">Result is : <span style="color:red"><?php
                            if(isset($total)){
                                echo $total;
                            }
                            ?></span></p>
                        </div>
                        <div class="cal-body pt-3">
                            <form method="POST">
                                <input type="text" name="number1" placeholder="Enter Frist Value" class="w-50 py-2 mb-2"><br>
                                <input type="text" name="number2" placeholder="Enter Second Value" class="w-50 py-2 mb-2"><br>
                                <select name="operation" class="w-50 py-2 mb-2">
                                    <option value="summation">Summation</option>
                                    <option value="substraction">Substraction</option>
                                    <option value="multiplication">Miltiplication</option>
                                    <option value="division">Division</option>
                                    <option value="modulus">Modulus</option>
                                </select><br>
                                <input class="mybutton w-50 py-3 mb-2" name="submit" type="submit" value="Find Solution">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </menu>

    <script src="/assests/bootstrap/bootstrap.bundle.js"></script>
</body>

</html>
