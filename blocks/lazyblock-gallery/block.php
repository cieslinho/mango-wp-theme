<section id="gallery" class="gallery">
    <div class="container">
        <h2 class="section-title"><span>galeria</span></h2>
        <div class="gallery__boxes">
            <div class="gallery__box gallery__box-swiper swiper mySwiper">
    <div class="swiper-wrapper">
    <?php forEach( $attributes['images'] as $image) : ?>
        <img src="<?php echo esc_url( $image['image']['url'] ); ?>" alt="<?php echo esc_attr( $image['image']['alt'] ); ?>" class="gallery__img swiper-slide">
        <?php endforeach; ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
    <div class="autoplay-progress">
      <svg viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="20"></circle>
      </svg>
      <span></span>
    </div>
  </div>
            <div class="gallery__box gallery__box-text">
                <p class="gallery__text">Galerie z weekendowych imprez, czyli cotygodniowa dawka rozrywki i emocji.</p>
                <p class="gallery__text">Sprawdź jak bawią się nasi Klubowicze, przeżyj to sam!</p>
                <p class="gallery__text">Zdjęcia z ostatnich eventów znajdziesz <a class="gallery__text-link" href="https://www.facebook.com/MangoClubOpole/photos_albums">tutaj</a></p>
            </div>
</div>
    </div>
</section>