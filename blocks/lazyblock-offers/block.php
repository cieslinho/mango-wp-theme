<section id="offers" class="offers">
        <div class="offers__cards">
            <?php forEach( $attributes['card'] as $card) : ?>
            <div class="offers__card">
                    <img src="<?php echo esc_url( $card['image']['url'] ); ?>" alt="<?php echo esc_attr( $card['image']['alt'] ); ?>" class="offers__img">
                <div class="offers__info">
                    <p class="offers__info-description"><?php echo esc_html( $card['title'] ); ?></p>
                    <h2 class="offers__info-title"><?php echo esc_html( $card['category'] ); ?></h2>
                    <a href="<?php echo esc_url( $card['file']['url'] ); ?>" class="offers__info-btn">sprawdź</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
</section>