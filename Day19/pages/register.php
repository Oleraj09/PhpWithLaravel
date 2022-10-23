<?php
    if(isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['adrs1']) && isset($_POST['adrs2']) && isset($_POST['cty']) && isset($_POST['st']) && isset($_POST['zip'])){
        ?>
        <table class="table table-bordered table-dark">
        <thead>
            <tr>
            <th scope="col">Email</th>
            <th scope="col">Adress 1</th>
            <th scope="col">Adress 2</th>
            <th scope="col">City</th>
            <th scope="col">Zip</th>
            <th scope="col">State</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_POST['email'] ?></td>
                <td><?php echo $_POST['adrs1'] ?></td>
                <td><?php echo $_POST['adrs2'] ?></td>
                <td><?php echo $_POST['cty'] ?></td>
                <td><?php echo $_POST['st'] ?></td>
                <td><?php echo $_POST['zip'] ?></td>
            </tr>

        </tbody>
    </table>
    <?php
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <link rel="stylesheet" href="assests/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assests/css/styles.css">
    <link rel="stylesheet" href="assests/css/responsive.css">    
</head>
<body>

    <section id="body">
        <div class="container py-5">
            <form action="action.php?page=home" method="POST">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="adrs1" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" name="adrs2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" name="cty">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select name="st" class="form-control">
                        <option selected>Choose State</option>
                        <option>Australia</option>
                        <option>Banglasesh</option>
                        <option>India</option>
                        <option>Canada</option>
                    </select>
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" name="zip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </section>


<script src="assests/bootstrap/bootstrap.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.js"></script>
<script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
</body>
</html>