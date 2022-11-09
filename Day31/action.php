<?php
include 'pages/frontend/header.php';
if(isset($_GET['pages'])){
    if($_GET['pages']=='home'){
        include 'pages/home.php';
    }
}
include 'pages/frontend/footer.php';