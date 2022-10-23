<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FruitesHUB - A Way to fresh Fruites!</title>
    <link rel="stylesheet" href="assests/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.css"/>
    <link rel="stylesheet" href="assests/css/styles.css">
    <link rel="stylesheet" href="assests/css/responsive.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mx-auto">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Z-Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll mx-auto" style="--bs-scroll-height: 100px;">
        <?php 
            foreach($menus as $m){
                ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><?php echo $m['name']; ?></a>
                </li>
            <?php
            }
        ?>    
    
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<menu>
    <div class="container">
        <div class="row p-2">            
                <?php
                $pdata = $myproducts;
                foreach($pdata as $pd){
                    ?>
                        <div class="col-4 py-2">
                            <div class="card" style="width: 18rem;">
                                <img src="<?php echo $pd['image'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $pd['title']; ?></h5>
                                    <p class="card-text"><?php echo $pd['desc']; ?></p>
                                    <p class="card-text"><?php echo $pd['price']; ?></p>
                                    <a href="#" class="btn btn-primary">Buy</a>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                ?>           
        </div>
    </div>
</menu>
    
<script src="assests/bootstrap/bootstrap.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.js"></script>
<script src="assests/js/myscript.js"></script>
</body>
</html>