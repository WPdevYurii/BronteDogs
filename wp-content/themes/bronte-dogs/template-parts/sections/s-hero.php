<?php
$title = get_sub_field('title');
$description = get_sub_field('description');
$image = get_sub_field('image');
$b_text_1 = get_sub_field('button_1_title');
$b_url_1 = get_sub_field('button_1_url');
$b_text_2 = get_sub_field('button_2_title');
$b_url_2 = get_sub_field('button_2_url');
?>

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 hero__left-col">
                <?php if(!empty($title)): ?>
                <h1 class="hero__title"><?php echo esc_html($title); ?></h1>
                <?php endif; ?>

                <?php if(!empty($description)): ?>
                <p class="hero__description"><?php echo esc_html($description); ?></p>
                <?php endif; ?>

                <div class="buttons">
                    <div class="buttons__wrap">
                        <?php if(!empty($b_text_1)): ?>
                            <button class="button buttons__green"><?php echo esc_html($b_text_1['title']); ?></button>
                        <?php endif; ?>

                        <?php if(!empty($b_text_2)): ?>
                        <button class="button buttons__white"><?php echo esc_html($b_text_2['title']); ?></button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 offset-md-1">
                <?php if(!empty($image)): ?>
                <div class="hero__image-wrap">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>