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

    <!-- JS -->
    <script src="js/header.js"></script>

</head>
<body>
    <header class="header" id="header">
        <div class="header__logo">
            <a href="#start"><h1>Piratas del caribe</h1></a>
            <a href=""><i class="fa fa-bars"></i></a>
        </div>
        <nav class="header__options">
            <a href="#start" class="a-inicio">Inicio</a>
            <div class="header__options--dropdown categories">
                <a href="">Categorías</a>
                <div class="link">
                    <a href="#" class="link-item">Link 1</a>
                    <a href="#" class="link-item">Link 2</a>
                    <a href="#" class="link-item">Link 3</a>
                    <a href="#" class="link-item">Link 4</a>
                    <a href="#" class="link-item">Link 5</a>
                    <a href="#" class="link-item">Link 6</a>
                </div>
            </div>
            <div class="header__options--dropdown movies">
                <a href="#movie">Películas</a>
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