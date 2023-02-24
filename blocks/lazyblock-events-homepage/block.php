<section class="featured-events">
    <div class="container">
        <h2 class="section-title"><span>wyróżnione</span></h2>
        <div class="featured-events__cards">
        <?php forEach( $attributes['events'] as $event) : ?>
            <div class="featured-events__card">
                <div class="featured-events__card-body">
                    <div class="featured-events__card-top">
                        <div class="featured-events__card-dates">
                            <p class="featured-events__card-day"><?php echo esc_html( $event['day'] ); ?></p>
                            <p class="featured-events__card-month"><?php echo esc_html( $event['month'] ); ?></p>
                        </div>
                        <span class="featured-events__card-span"></span>
                        <p class="featured-events__card-title"><?php echo esc_html( $event['title'] ); ?></p>
                    </div>
                    <img src="<?php echo esc_url( $event['image']['url'] ); ?>" alt="<?php echo esc_attr( $event['image']['alt'] ); ?> class="featured-events__card-img">
                    <div class="featured-events__card-bottom">
                        <a href="<?php echo esc_url( $event['ticket'] ); ?>"class="featured-events__card-link">kup bilet</a>
                      <div class="featured-events__card-socials">
                        <a href="<?php echo esc_url( $event['facebook'] ); ?>" class="featured-events__card-btn">
                         <i class='bx bxl-facebook'></i>
                        </a>
                        <a href="<?php echo esc_url( $event['instagram'] ); ?>" class="featured-events__card-btn">
                         <i class='bx bxl-instagram'></i>
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
</section>