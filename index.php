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
                <a href="/klub/#offers" class="nav__item">oferta</a>
                <a href="<?php echo get_template_directory_uri(); ?>/assets/files/menumango2023.pdf" class="nav__item">menu</a>
                <a href="/klub/#gallery" class="nav__item">galeria</a>
                <a href="https://emenago.com/inner/cart/272/5731fc57bbc52b82e4648b024380ea95/pl" class="nav__item">rezerwacje</a>
                <a href="/koncerty" class="nav__item">scena</a>
                <a href="/klub" class="nav__item">klub</a>
                <a href="/news" class="nav__item">news</a>
                <a href="/klub/#contact" class="nav__item">kontakt</a>
            </ul>
        </div>
</nav>
<main class="main">

<section class="news">
                <div class="container">
                    <h2 class="section-title"><span>news</span></h2>
                    <div class="news__boxes">
                    <div class="news__cards">
                        
                    <?php 
                    if (have_posts()):
                        while (have_posts()): the_post();
                        ?>
                        
                        <a class="news__card" href="<?php echo the_permalink(); ?>">
                            <img class="news__card-img" src="<?php the_post_thumbnail_url(); ?>">
                            <div class="news__card-bottom">                      
                                <h3 class="news__card-title"><?php echo trim_text(get_the_title(), 30); ?></h3>
                                <p class="news__card-date"><?php echo get_the_date(); ?></p>
                            </div>
                        </a>
                        <?php
                    endwhile;
                else:
            ?>
                            <p>Brak postów do wyświetlenia.</p>
                            <?php endif; ?>
                           
                            </div>
                            <?php wp_pagenavi(); ?>
                            </div>
                            </div>
                            
                            
                </div>
            </section>




</main>
<footer class="footer">
     <div class="footer__boxes">
        <div class="footer__box footer__box-info">
            <h2 class="section-title"><span>mango music club</span></h2>
            <p class="footer__text">
                Mango Club Opole to idealne miejsce do spędzania wolnego czasu w każdy weekend! Miejsce, gdzie dobra zabawa i rozrywka serwowane są w najlepszym klubowym wydaniu. 
            </p>
        </div>
        <div class="footer__box footer__box-socials">
            <h2 class="section-title"><span>social media</span></h2>
            <div class="footer__socials">
                <a href="https://www.facebook.com/MangoClubOpole" class="footer__socials-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://www.instagram.com/mangoclubopole/" class="footer__socials-icon">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="https://www.youtube.com/channel/UC55TNNgbz9Hc6fxJXoFfd2A" class="footer__socials-icon">
                    <i class='bx bxl-youtube'></i>
                </a>
            </div>
        </div>
        </div>
</footer>
    <div class="footer__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2528.0634585118437!2d17.939152815902332!3d50.68164707855955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4710530e64923265%3A0x530c597ea2d5906b!2sMango%20Music%20Club!5e0!3m2!1spl!2spl!4v1677075250827!5m2!1spl!2spl" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
<div class="footer__bottom">
            <p class="footer__bottom-text">Realizacja | <a href="https://cieslaszymon.pl/">Cieśla Szymon</a></p>
</div>
<?php 
get_footer();
