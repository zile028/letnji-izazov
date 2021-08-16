<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<?php include "partials/top.php" ?>
<!-- NAVIGATION -->
<?php include "partials/navigation.php" ?>

<!-- HEADER -->
<header class="header header-blog"></header>

<section class="container intro py">
    <h1>Blog</h1>
    <p>Fažana, mjesto polaska u otkrivanju...</p>
</section>
<hr class="divider container">

<!-- BLOG -->
<section class="blog row container py">
    <article class="col-md-7 p-0">

        <div class="row no-gutters">
            <div class="col-md-6">
                <img class="img-fluid" src="img/blog1.webp" alt="">
            </div>

            <div class="col-md-6 d-flex justify-content-center align-items-start flex-column p-3">
                <h5>Pješačenje</h5>
                <p class="font-italic">03.08.2021. | <a href="">Admin</a></p>
                <p>Pješačenjem možete na najbolji mogući način doživjeti...</p>
                <a class="btnMore" href="">VIŠE &gt</a>
            </div>

        </div>

        <hr class="divider my-5">

        <div class="row no-gutters">
            <div class="col-md-6">
                <img class="img-fluid" src="img/blog2.webp" alt="">
            </div>

            <div class="col-md-6 d-flex justify-content-center align-items-start flex-column p-3">
                <h5>Pješačenje</h5>
                <p class="font-italic">03.08.2021. | <a href="">Admin</a></p>
                <p>Pješačenjem možete na najbolji mogući način doživjeti...</p>
                <a class="btnMore" href="">VIŠE &gt</a>
            </div>

        </div>

        <hr class="divider my-5">

        <div class="row no-gutters">
            <div class="col-md-6">
                <img class="img-fluid" src="img/blog3.webp" alt="">
            </div>

            <div class="col-md-6 d-flex justify-content-center align-items-start flex-column p-3">
                <h5>Pješačenje</h5>
                <p class="font-italic">03.08.2021. | <a href="">Admin</a></p>
                <p>Pješačenjem možete na najbolji mogući način doživjeti...</p>
                <a class="btnMore" href="">VIŠE &gt</a>
            </div>

        </div>

        <hr class="divider my-5">


    </article>

    <aside class="col-md-5">
        <?php include "partials/sidebar.php" ?>
    </aside>
</section>

<!-- FOOTER -->
<?php include "partials/footer.php" ?>