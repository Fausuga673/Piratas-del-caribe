<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piratas del caribe</title>

    <!-- ICONS -->

    <script src="https://kit.fontawesome.com/a7ae13901f.js" crossorigin="anonymous"></script>

    <!-- FONTS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&family=Secular+One&display=swap" rel="stylesheet">
    
    <!-- STYLES -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/start.css">
    <link rel="stylesheet" href="css/movie.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/playmovie.css">

    <!-- JS -->
    <script src="js/header.js"></script>
    <script src="js/functions.js"></script>

</head>
<body>
    <header class="header" id="header">
        <div class="header__logo">
            <a href="index.php"><h1>Piratas del caribe</h1></a>
            <a href="javascript:void(0);" class="icon" onclick="desplegarMenu()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <nav class="header__options" id="header__options">
            <a href="#start" class="a-inicio">Inicio</a>
            <div class="header__options--dropdown categories">
                <a href="" class="section">Categorías</a>
                <div class="link">
                    <a href="#" class="link-item">Acción</a>
                    <a href="#" class="link-item">Drama</a>
                    <a href="#" class="link-item">Comedia</a>
                    <a href="#" class="link-item">Terror</a>
                    <a href="#" class="link-item">Aventura</a>
                    <a href="#" class="link-item">Romance</a>
                </div>
            </div>
            <div class="header__options--dropdown movies">
                <a href="#movie" class="section">Películas</a>
                <div class="link">
                    <a href="#" class="link-item">Populares</a>
                    <a href="#" class="link-item">Estrenos</a>
                </div>
            </div>
            <form action="" method="post" autocomplete="off">
                <input type="text" name="search" id="search" placeholder="Buscar">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <a href="" class="login"><i class="fa-solid fa-user"></i>Login</a>
        </nav>
    </header>