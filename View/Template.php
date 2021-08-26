<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- navbar layout -->
    <link rel="stylesheet" href="./Contents/CSS/bootstrapNavBar.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- lightslider -->
    <link type="text/css" rel="stylesheet" href="./Contents/lightslider-master/dist/css/lightslider.min.css" />
    <!-- game page layout -->
    <link rel="stylesheet" href="./Contents/CSS/gameLayout.css">
    <!-- home page layout -->
    <link rel="stylesheet" href="./Contents/CSS/Home.css">
    <!-- search page layout -->
    <link rel="stylesheet" href="./Contents/CSS/search.css">


</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-1">
        <a href="./index.php" class="navbar-brand pl-4"><img src="https://www.igdb.com/apple-icon-72x72.png"></a>
        <button class="navbar-toggler">
            <span class="navbar-toggler-icon" data-toggle="collapse" data-target="#navbarMenu"></span>
        </button>
        <div id="navbarMenu" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a href="./index.php" class="nav-link mr-4">Home</a>
                </li>
                <li id="fonts" class="nav-item fonts">
                    <a href="./index.php?action=searchGame" class="nav-link  mr-4" >Search</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<?= $content ?>
    <!-- jquery -->
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <!-- home -->
<script type="text/javascript" src="./Contents/JS/Home.js"></script>
    <!-- Bootsrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
 <!-- game page layout -->
<script type="text/javascript" src="./Contents/JS/gameLayout.js"></script>
    <!-- search page -->
<script type="text/javascript" src="./Contents/JS/Search.js"></script>
    <!-- slider -->
<script src="./Contents/lightslider-master/dist/js/lightslider.min.js"></script>
</body><!--
<footer>
    <p>54786 - HE2B ESI - PROJET WEB - GREGORY VAN DER PLUIJM</p>
</footer>-->

</html>