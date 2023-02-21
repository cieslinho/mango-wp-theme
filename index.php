<?php
/**
 * @package Mango
 */
get_header();
?>
<nav class="nav">
    <div class="nav__overlay"></div>
        <div class="nav__navbar">
            <a href="<?php echo get_home_url(); ?>" class="nav__brand">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Mango Klub Muzyczny Opole, Opole Dysktoeka" class="nav__logo">
            </a>
            <button class="nav__btn">
                <div class="nav__btn-box">
                    <div class="nav__btn-bars"></div>
                </div>
            </button>
            <ul class="nav__list">
                <a href="/wydarzenia" class="nav__item">wydarzenia</a>
                <a href="#gallery" class="nav__item">galeria</a>
                <a href="https://emenago.com/inner/cart/272/5731fc57bbc52b82e4648b024380ea95/pl" class="nav__item">rezerwacje</a>
                <a href="#offers" class="nav__item">oferta</a>
                <a href="/blog" class="nav__item">blog</a>
                <a href="#contact" class="nav__item">kontakt</a>
            </ul>
        </div>
</nav>
<main class="main">

<?php the_content(); ?>




</main>

<?php 
get_footer();
