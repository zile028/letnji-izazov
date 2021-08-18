<?php include "partials/top.php" ?>
<?php include 'partials/social.php' ?>

<!-- NAVIGATION -->
<?php include "partials/navigation.php" ?>

<!-- HEADER -->
<header class="header">
    <img src="img/blog1.webp" alt="">
</header>

<section class="container intro py">
    <h1>Kontaktirajte nas</h1>
    <p>Fažana, mjesto polaska u otkrivanju...</p>
</section>
<hr class="divider container">

<!-- BLOG -->
<section class="contact row container py">
    <article class="col-md-7 p-0">

        <form action="">

            <input type="text" class="form-control mb-3" placeholder="Ime i prezime">
            <input type="email" class="form-control mb-3" placeholder="E-mail">
            <textarea class="form-control mb-3" cols="30" rows="10" placeholder="Poruka"></textarea>
            <button class="btn btn-primary" type="submit">Polji poruku</button>



        </form>

        <hr class="divider my-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45194.93466392704!2d13.783578255218046!3d44.92977321557727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477cce0ad44b1b25%3A0x611b65fe12d9dd5e!2z0KTQsNC20LDQvdCwLCDQpdGA0LLQsNGC0YHQutCw!5e0!3m2!1ssr!2s!4v1629243355349!5m2!1ssr!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <hr class="divider mt-5">
    </article>

    <aside class="col-md-5">
        <?php include "partials/sidebar.php" ?>
    </aside>
</section>

<!-- FOOTER -->
<?php include "partials/footer.php" ?>