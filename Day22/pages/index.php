<?php
    $fristvalue = $_POST['fvalue'];
    $secondvalue = $_POST['svalue'];
    $select = $_POST['selecteq'];
    $results='';
    if(isset($fristvalue) && isset($secondvalue) && isset($select)){
            switch ($select) {
                case "Summation":
                    $results = $fristvalue + $secondvalue;
                break;
                case "Substraction":
                    $results = $fristvalue - $secondvalue;
                break;
                case "Miltiplication":
                    $results = $fristvalue * $secondvalue;
                break;
                case "Division":
                    $results = $fristvalue / $secondvalue;
                break;
                case "Modulus":
                    $results = $fristvalue % $secondvalue;
                break;
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
                            <p class="pt-3">Result is : <span style="color:red"><?php echo $results ?></span></p>
                        </div>
                        <div class="cal-body pt-3">
                            <form action="POST">
                                <input type="text" name="fvalue" placeholder="Enter Frist Value" class="w-50 py-2 mb-2"><br>
                                <input type="text" name="svalue" placeholder="Enter Second Value" class="w-50 py-2 mb-2"><br>
                                <select value="selecteq" class="w-50 py-2 mb-2">
                                    <option value="Summation">Summation</option>
                                    <option value="Substraction">Substraction</option>
                                    <option value="Miltiplication">Miltiplication</option>
                                    <option value="Division">Division</option>
                                    <option value="Modulus">Modulus</option>
                                </select><br>
                                <input class="mybutton w-50 py-3 mb-2" type="button" value="Find Solution">
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