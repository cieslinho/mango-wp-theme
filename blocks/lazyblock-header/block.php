<div class="nav__top">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mangologosvgnew.svg" alt="mango music club logo, mango music club opole">
</div>
<header class="header">
    <div class="header__boxes">
        <div class="header__box">
            <video autoplay loop muted playsinline type="video/mp4" src="<?php echo esc_url( $attributes['club']['url'] ); ?>" class="header__video"></video>
                <a href="/klub" class="header__link">klub</a>
        </div>
        <div class="header__box">
            <video autoplay loop muted playsinline type="video/mp4" src="<?php echo esc_url( $attributes['scene']['url'] ); ?>" class="header__video"></video>
            <a href="/koncerty" class="header__link">koncerty</a>
        </div>
    </div>
</header>