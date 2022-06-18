<?php include("pages/header.php") ?>
<main class="playmovie">
    <section class="info">
        <img src="images/forrestgump.jpg" alt="">
        <article class="info__text">
            <h2>Título</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam qui explicabo temporibus debitis ut dolor odio dignissimos nesciunt exercitationem quidem.</p>
            <ul>
                <li>Director:</li>
                <li>Categoría:</li>
                <li>Actores:</li>
            </ul>
        </article>
    </section>
    
    <section class="video">
        <video controls>
            <source src="videos/portafolio.mp4" type="video/mp4">
        </video>
    </section>

    <nav class="moviesnav" id="moviesnav">
        <h2>Más películas</h2>
    </nav>

    <section class="movie" id="movie">
        <div class="movie__container">
            <article class="movie__container--article">
                <div class="movie__container--article-img">
                    <a href="playmovie.php"><img src="images/thebatman.jpg" alt=""></a>
                    <a href="playmovie.php"><div class="layer"><i class="fa-regular fa-circle-play"></i></div></a>
                </div>
                <p class="movie__container--article-title">Titulo película</p>
            </article>
            <article class="movie__container--article">
                <div class="movie__container--article-img">
                    <a href="playmovie.php"><img src="images/laformadelagua.jpg" alt=""></a>
                    <a href="playmovie.php"><div class="layer"><i class="fa-regular fa-circle-play"></i></div></a>
                </div>
                <p class="movie__container--article-title">Titulo película</p>
            </article>
            <article class="movie__container--article">
                <div class="movie__container--article-img">
                    <a href="playmovie.php"><img src="images/jojorabbit.jpg" alt=""></a>
                    <a href="playmovie.php"><div class="layer"><i class="fa-regular fa-circle-play"></i></div></a>
                </div>
                <p class="movie__container--article-title">Titulo película</p>
            </article>
            <article class="movie__container--article">
                <div class="movie__container--article-img">
                    <a href="playmovie.php"><img src="images/moonrisekingdom.jpg" alt=""></a>
                    <a href="playmovie.php"><div class="layer"><i class="fa-regular fa-circle-play"></i></div></a>
                </div>
                <p class="movie__container--article-title">Titulo película</p>
            </article>
            <article class="movie__container--article">
                <div class="movie__container--article-img">
                    <a href="playmovie.php"><img src="images/forrestgump.jpg" alt=""></a>
                    <a href="playmovie.php"><div class="layer"><i class="fa-regular fa-circle-play"></i></div></a>
                </div>
                <p class="movie__container--article-title">Titulo película</p>
            </article>
            <article class="movie__container--article">
                <div class="movie__container--article-img">
                    <a href="playmovie.php"><img src="images/fightclub.jpg" alt=""></a>
                    <a href="playmovie.php"><div class="layer"><i class="fa-regular fa-circle-play"></i></div></a>
                </div>
                <p class="movie__container--article-title">Titulo película</p>
            </article>
            <article class="movie__container--article">
                <div class="movie__container--article-img">
                    <a href="playmovie.php"><img src="images/bigfish.jpg" alt=""></a>
                    <a href="playmovie.php"><div class="layer"><i class="fa-regular fa-circle-play"></i></div></a>
                </div>
                <p class="movie__container--article-title">Titulo película</p>
            </article>
            <article class="movie__container--article">
                <div class="movie__container--article-img">
                    <a href="playmovie.php"><img src="images/backtothefuture.jpg" alt=""></a>
                    <a href="playmovie.php"><div class="layer"><i class="fa-regular fa-circle-play"></i></div></a>
                </div>
                <p class="movie__container--article-title">Titulo película</p>
            </article>
        </div>
    </section>


</main>
<?php include("pages/footer.php") ?>