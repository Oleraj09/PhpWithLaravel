<?php
  $dbconnection = mysqli_connect('localhost','root','','ole_db');
  $view = "SELECT * FROM users";
  $read = mysqli_query($dbconnection , $view);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oleraj Hossin - A perosnal Testing Site!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" integrity="sha512-HHsOC+h3najWR7OKiGZtfhFIEzg5VRIPde0kB0bG2QRidTQqf+sbfcxCTB16AcFB93xMjnBIKE29/MjdzXE+qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.css" integrity="sha512-+QrNe4Kul4TNKwDK+EJM71C9z5I9I/iYLEIJPYTfmXouMSU8tkayWYnOsAKjDAaOOH21+MS747IPTYcD+2euuQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .mybtn{
        background: transparent;
        border: none;
        color: white;
    }
</style>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="../index.php">Navbar</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
        </div>
    </nav>
</header>

<section>
    <hr>
    <div class="tables">
        <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Email</th>
                <th scope="col">Users</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                <th scope="col">Registered</th>
                <th scope="col">Permission</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                  while($users = mysqli_fetch_array($read, MYSQLI_ASSOC)){
                    ?>
                        <tr>
                            <th scope="row"><?php echo $users['id'] ?></th>
                            <td><?php echo $users['email'] ?></td>
                            <td><?php echo $users['user_name'] ?></td>
                            <td>
                                <button class="mybtn"><i class="fa-solid fa-toggle-on fa-xl"></i></button>
                            </td>
                            <td><?php echo $users['status'] ?></td>
                            <td><?php echo $users['create_id'] ?></td>
                            <td>
                                <button class="mybtn"><i class="fa-solid fa-pen-to-square fa-xl"></i></button>
                                <button class="mybtn"><i class="fa-solid fa-delete-left fa-xl"></i></i></button>  
                            </td>
                        </tr>
                    <?php
                  }
            ?>
            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                    <button class="mybtn"><i class="fa-solid fa-toggle-on fa-xl"></i></button>
                </td>
                <td>Otto</td>
                <td>Otto</td>
                <td>
                    <button class="mybtn"><i class="fa-solid fa-pen-to-square fa-xl"></i></button>
                    <button class="mybtn"><i class="fa-solid fa-delete-left fa-xl"></i></i></button>  
                </td>
            </tr> -->
        </tbody>
        </table>
    </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.bundle.js"></script>
<script src="assests/fontaswome/all.js"></script>
</body>

</html>