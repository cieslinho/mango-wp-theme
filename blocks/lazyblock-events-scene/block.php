<section class="scene">
    <div class="container">
        <h2 class="section-title"><span>koncerty</span></h2>
        <div class="scene__cards">
        <?php forEach( $attributes['events-scene'] as $event) : ?>
            <div class="scene__card">
                <img src="<?php echo esc_url( $event['image']['url'] ); ?>" alt="<?php echo esc_attr( $event['image']['alt'] ); ?>" class="scene__card-img">
                <div class="scene__card-texts">
                    <h3 class="scene__card-title"><?php echo esc_html( $event['title'] ); ?></h3>
                    <p class="scene__card-date">
                    <i class='bx bx-calendar' ></i>
                    <?php echo esc_html( $event['date'] ); ?>
                    </p>
                    <div class="scene__card-btns">
                    <a href="<?php echo esc_url( $event['ticket'] ); ?>" class="scene__card-btn">kup bilet</a>
                    <a href="<?php echo esc_url( $event['more'] ); ?>" class="scene__card-btn scene__card-btn-facebook">więcej</a>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
    </div>
</section>