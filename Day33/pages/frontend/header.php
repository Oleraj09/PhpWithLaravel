<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MondolMart :: A Fashion website, Desire your buy!!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="assests/css/home.css">
    <link rel="stylesheet" href="assests/css/todo.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="action.php?pages=home">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item pe-3">
                    <a class="nav-link active" aria-current="page" href="action.php?pages=home">Home</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link" href="action.php?pages=calculator">Calculator</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="dropdown nav-item pe-3">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown">
                        Services 
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="action.php?pages=todo" class="dropdown-item">Todo App</a></li>
                    </ul>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Login</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
