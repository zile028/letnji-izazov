<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<?php include "partials/top.php" ?>
<!-- NAVIGATION -->
<?php include "partials/navigation.php" ?>

<!-- HEADER -->
<header class="header header-events"></header>

<section class="container intro py">
    <h1>Događanja</h1>
    <p>Fažana, mjesto polaska u otkrivanju...</p>
</section>
<hr class="divider container">

<!-- EVENTS -->
<section class="events py">
    <article class="container">
        <h2 class="overlineTitle">Događanja u Fažani</h2>
        <div class="row no-gutters justify-content-between">
            <div class="card col-md-4">
                <div><img class="card-img-top" src="img/riva.webp" alt=""></div>
                <div class="card-body">
                    <p>03.08.2021.</p>
                    <h5>Priče s fažanske rive</h5>
                    <a href="">VIŠE &gt</a>
                </div>
            </div>

            <div class="card col-md-4">
                <div><img class="card-img-top" src="img/tradicija.webp" alt="tradicija"></div>
                <div class="card-body">
                    <p>14.08.2021.</p>
                    <h5>Tradicija večeri</h5>
                    <a href="">VIŠE &gt</a>
                </div>
            </div>

            <div class="card col-md-4">
                <div><img class="card-img-top" src="img/valbandon.webp" alt="valbandon"></div>
                <div class="card-body">
                    <p>28.08.2021.</p>
                    <h5>Valbandon pod zvezdama</h5>
                    <a href="">VIŠE &gt</a>
                </div>
            </div>
        </div>
    </article>
</section>

<!-- FOOTER -->
<?php include "partials/footer.php" ?>