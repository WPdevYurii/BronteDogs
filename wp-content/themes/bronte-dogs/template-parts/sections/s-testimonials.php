<?php 
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
?>

<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if(!empty($title)): ?>
                <h3 class="testimonials__title"><?php echo esc_html($title); ?></h3>
                <?php endif; ?>

                <?php if(!empty($subtitle)): ?>
                <p class="testimonials__subtitle"><?php echo esc_html($subtitle); ?></p>
                <?php endif;

                $args = array(
                    'post_type' => 'post_testimonials',
                    'posts_per_page' => -1,
                    'post_status' => 'publish'
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    echo '<div class="slides">';
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="slides__item">
                            <div class="slides__item-wrap">
                                <div class="slides__item-decor"></div>
                                <p class="slides__item-text"><?php the_content(); ?></p>
                                <p class="slides__item-name"> - <?php the_title(); ?></p>
                            </div>
                        </div>
                    <?php endwhile;
                    echo '</div>';
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
</section>