<?php
include 'views/includes/header.php';
if (isset($_GET['page'])) {
    $page=$_GET['page'];
}
else {
    $page="accueil";
}
switch ($page) {
    case 'accueil':
        include 'views/accueil.php';
        break;

    case 'contact':
        include 'views/contact.php';
        break;
}
include 'views/includes/footer.php';
?>