<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soft-Care :: A Software Agency!</title>
    <link rel="stylesheet" href="assests/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assests/fontaswome/all.css">
    <link rel="stylesheet" href="assests/css/styles.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="assests/css/responsive.css">
</head>
<body>
    
    <header id="header">
        <nav class="navbar navbar-expand-lg shadow text-light">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php
                  foreach($menus as $m){
                    if($m['name'][0]=='Home Menu'){
                      echo "
                        <li class=\"size nav-item pe-3\">
                          <a class=\"text-bold  nav-link\" aria-current=\"page\" href=\"#\">{$m['name'][0]}</a>
                        </li>
                      ";
                    }
                    elseif($m['name'][0]=='Services'){
                      echo "
                      <li class=\"nav-item dropdown px-2\">
                      <a class=\"text-bold  nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Services
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\"> ";
                          $fuck = count(array_keys($m['name'][1]));
                          for($i=0;$i<$fuck;$i++){
                            echo "<li><a class=\"dropdown-item\" href=\"#\">{$m['name'][1][$i]}</a></li>";
                          }
                        echo "  
                        </ul>
                      </li>
                      ";
                    }
                    elseif($m['name'][0]=='Projects'){
                      echo "
                      <li class=\"nav-item dropdown px-2\">
                      <a class=\"text-bold  nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Projects
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\"> ";
                          $fuck = count(array_keys($m['name'][1]));
                          for($i=0;$i<$fuck;$i++){
                            echo "<li><a class=\"dropdown-item\" href=\"#\">{$m['name'][1][$i]}</a></li>";
                          }                       
                          echo " 
                        </ul>
                      </li>
                      ";
                    }
                    else{
                      echo "<li class=\"nav-item px-2\">
                              <a class=\"nav-link text-bold\" href=\"#\"> {$m['name'][0]} </a>
                            </li>
                            ";
                    }
                  }
                ?>

                <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="size nav-item pe-3">
                    <a class="text-bold  nav-link" aria-current="page" href="#">Home Menu</a>
                  </li>
                  <li class="nav-item px-2">
                    <a class="nav-link text-bold  " href="#">Blogger</a>
                  </li>
                  <li class="nav-item dropdown px-2">
                    <a class="text-bold  nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown 1
                      </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Item 1</a></li>
                        <li><a class="dropdown-item" href="#">Item 2</a></li>
                        <li><a class="dropdown-item" href="#">Item 3</a></li>
                        <li><a class="dropdown-item" href="#">Item 4</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown px-2">
                    <a class="text-bold  nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown 2
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Item 1</a></li>
                      <li><a class="dropdown-item" href="#">Item 2</a></li>
                      <li><a class="dropdown-item" href="#">Item 3</a></li>
                      <li><a class="dropdown-item" href="#">Item 4</a></li>
                    </ul>
                  </li>
                  <li class="nav-item px-2">
                    <a class="nav-link text-bold" href="#">About</a>
                  </li>
                  <li class="nav-item px-2">
                    <a class="nav-link text-bold  " href="#">Contact</a>
                  </li>
                  <li class="nav-item px-2">
                    <a class="nav-link text-bold  " href="#">Login</a>
                  </li>
                </ul> -->
              </div>
            </div>
        </nav>
    </header>

    <main>
      <section id="display-section">
        <div class="display-mask">
          <div class="row">
            <div class="col-12">
              <div class="display-item text-center">
                <h3 class="text-center text-white">Alawys be Together</h3>
                <h1 class="py-2 text-center text-danger text-uppercase">Make Perfect Product</h1>
                <h3 class="text-center text-white">with creative solution</h3>
                <form action="" class="search pt-3">
                  <input class="p-3 w-25 rounded-pill" type="search" placeholder="Type here ..." />
                  <button class="mybutton"><i class="fa-magnifying-glass fa-solid"></i></button>
                </form>
                <br>

              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="product-more">
        <div class="container">
            <div class="row text-center">
                <h1 class="text-uppercase pt-5">Our Products</h1>
                <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore saepe dolore necessitatibu.</p>
            </div>
            <div class="row py-3">
              <?php        
                foreach($myproducts as $mp) {
                  ?>
                    <div class="col-3 col-md-3">
                      <div class="image-s card shadow">
                          <img src="<?php echo $mp['image']; ?>" alt="Item1">
                          <div class="card-body b-0">
                              <h6 class="text-uppercase"><?php echo $mp['title']; ?></h6>
                              <p><?php echo $mp['desc']; ?></p>
                              <p>Price: <span><?php echo $mp['price']; ?></span></p>
                              <button type="button" class="mx-auto btn-style-own"><a href="#" class="links">Buy Now</a></button>
                          </div>
                        </div>
                    </div>
                  <?php
                }
              ?>
                <!-- <div class="col-3 col-md-3">
                    <div class="image-s card shadow">
                        <img src="https://images.unsplash.com/photo-1618424181497-157f25b6ddd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wJTIwY29tcHV0ZXJ8ZW58MHx8MHx8&w=1000&q=80" alt="Item1">
                        <div class="card-body b-0">
                            <h6 class="text-uppercase">Apple and Nutural Drinks From Ameraica</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore itaque quidem cumque ab assumenda id beatae reiciendis neque ipsum voluptatibus. Deserunt veniam odit quasi dolor quisquam excepturi saepe, iste fugiat!</p>
                            <p>Price: <span>$20.50</span></p>
                            <button type="button" class="mx-auto btn-style-own"><a href="#" class="links">Buy Now</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3">
                    <div class="image-s card shadow">
                        <img src="https://thumbs.dreamstime.com/b/broken-laptop-repair-insurance-concept-man-working-computer-damaged-screen-office-business-background-169357891.jpg" alt="Item1">
                        <div class="card-body b-0">
                            <h6 class="text-uppercase">Apple and Nutural Drinks From Ameraica</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore itaque quidem cumque ab assumenda id beatae reiciendis neque ipsum voluptatibus. Deserunt veniam odit quasi dolor quisquam excepturi saepe, iste fugiat!</p>
                            <p>Price: <span>$20.50</span></p>
                            <button type="button" class="mx-auto btn-style-own"><a href="#" class="links">Buy Now</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3">
                    <div class="image-s card shadow">
                        <img src="https://thumbs.dreamstime.com/b/hands-computer-desk-using-laptop-rustic-wood-background-cup-tea-book-globe-glasses-53253551.jpg" alt="Item1">
                        <div class="card-body b-0">
                            <h6 class="text-uppercase">Apple and Nutural Drinks From Ameraica</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore itaque quidem cumque ab assumenda id beatae reiciendis neque ipsum voluptatibus. Deserunt veniam odit quasi dolor quisquam excepturi saepe, iste fugiat!</p>
                            <p>Price: <span>$20.50</span></p>
                            <button type="button" class="mx-auto btn-style-own"><a href="#" class="links">Buy Now</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-3">
                    <div class="image-s card shadow">
                        <img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bGFwdG9wJTIwY29tcHV0ZXJ8ZW58MHx8MHx8&w=1000&q=80" alt="Item1">
                        <div class="card-body b-0">
                            <h6 class="text-uppercase">Apple and Nutural Drinks From Ameraica</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore itaque quidem cumque ab assumenda id beatae reiciendis neque ipsum voluptatibus. Deserunt veniam odit quasi dolor quisquam excepturi saepe, iste fugiat!</p>
                            <p>Price: <span>$20.50</span></p>
                            <button type="button" class="mx-auto btn-style-own"><a href="#" class="links">Buy Now</a></button>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
      </section>
    </main>
    <footer id="footer">
      <div class="footer-top">
        <div class="rows">
          <div class="footer-body col-md-4">
            <h3 class="contact-loc">Information Zone</h3>
            <div class="contact-item">
              <ul class="navbar-nav m-auto">
                <li  class="nav-item space">
                  <i class="fa-solid fa-address-card icons"></i> &nbsp; From 8AM to 9PM
                </li>
                <li  class="nav-item space">
                  <i class="fa-solid fa-phone icons"></i> &nbsp; 01781886507 <br>  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; 01827408121
                </li>
                <li  class="nav-item space">
                  <i class="fa-solid fa-location-dot icons"></i> &nbsp; Shyal-Bari, Rupnagar Residential<br>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mirpur - 2,  Dhaka,  Bangladesh
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-body col-md-4">
            <div class="link-title">
              <h3 class="link-tname">Quick Links</h3>
            </div>
            <ul class="navbar-nav m-auto">
              <li  class="nav-item">
                <a class="nav-link" href="#">Homepage</a>
              </li>
              <li  class="nav-item">
                <a class="nav-link" href="#">Important</a>
              </li>
              <li  class="nav-item">
                <a class="nav-link" href="#">Sitemap</a>
              </li>
              <li  class="nav-item">
                <a class="nav-link" href="#">Category</a>
              </li>
            </ul>
          </div>
          <div class="footer-body col-md-4">
            <div class="newsletter">
              <h3 class="nletter">Newsletter</h3>
              <p class="getintouch">Hey user, Alawys Get in touch with us!</p>
              <input type="text">
              <button class="n-btn">SEND</button>
              <div class="icon-list">
                <div class="icons"><i class="fa-brands fa-facebook fa-2xl"></i></div>
                <div class="icons"><i class="fa-brands fa-twitter fa-2xl"></i></div>
                <div class="icons"><i class="fa-brands fa-youtube fa-2xl"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="footer-bottom">
      <div class="rows">
        <div class="footer-end col-md-12">
          <div class="text-center">
            <p class="bottom-end">All the rights reserved @ MondolOZ<sup>TM</sup> <span class="fyear">2022</span></p>
          </div>
        </div>
      </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
<script src="assests/bootstrap/bootstrap.bundle.js"></script>
<script src="assests/fontaswome/all.js"></script>
<script src="assests/js/myscript.js"></script>
</body>
</html>
