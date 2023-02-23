<div class="residents">
    <div class="container">
        <h2 class="section-title"><span>rezydenci</span></h2>
        <div class="residents__cards swiper residents__cards-swiper">
            <div class="residents__cards-wrapper swiper-wrapper">
            <?php forEach( $attributes['residents'] as $resident) : ?>
            <div class="residents__card swiper-slide">
                <img src="<?php echo esc_url( $resident['image']['url'] ); ?>" alt="<?php echo esc_attr( $resident['image']['alt'] ); ?>" class="residents__card-img">
                <div class="residents__card-content">
                    <h4 class="residents__card-title"><?php echo esc_html( $resident['nickname'] ); ?></h4>
                    <div class="residents__card-socials">
                    <a href="<?php echo esc_url( $resident['facebook'] ); ?>" class="residents__card-icon">
                    <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="<?php echo esc_url( $resident['instagram'] ); ?>" class="residents__card-icon">
                    <i class='bx bxl-instagram'></i>
                    </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>