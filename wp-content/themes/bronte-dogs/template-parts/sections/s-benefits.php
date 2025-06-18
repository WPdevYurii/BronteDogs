<?php 
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$content = get_sub_field('content');
$f_price = get_sub_field('full_day_price');
$h_price = get_sub_field('half_day_price:');
$button = get_sub_field('button');
?>

<section class="benefits">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <?php if(!empty($title) && !empty($subtitle)): ?>
                <h3 class="benefits__title"><?php echo esc_html($title); ?></br><span><?php echo esc_html($subtitle); ?></span></h3>
                <?php endif; ?>

                <?php if(!empty($content)): ?>
                <p class="benefits__content"><?php echo esc_html($content); ?></p>
                <?php endif; ?>

                <p class="benefits__price">
                    <?php echo esc_html('Full Day: '); ?><span><?php echo esc_html($f_price); ?></span><?php echo esc_html(' | Half Day: '); ?><span><?php echo esc_html($h_price); ?></span>
                </p>

                <div class="buttons">
                    <div class="buttons__wrap">
                        <?php if(!empty($button)): ?>
                            <button class="button buttons__green"><?php echo esc_html($button['title']); ?></button>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="benefits__p-container"></div>
            </div>
            <div class="col-7">
                <?php
                if( have_rows('benefits') ): ?>
                    <div class="benefits__repeater">
                        <?php while( have_rows('benefits') ) : the_row();
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('title');
                            $text = get_sub_field('content'); ?>
                            <div class="benefits__item">
                                <div class="benefits__item-left">
                                    <?php if(!empty($icon)): ?>
                                    <div class="benefits__item-icon-wrap">
                                        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="benefits__item-right">
                                    <?php if(!empty($title)): ?>
                                    <h6><?php echo esc_html($title); ?></h6>
                                    <?php endif; ?>

                                    <?php if(!empty($text)): ?>
                                    <p><?php echo esc_html($text); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>