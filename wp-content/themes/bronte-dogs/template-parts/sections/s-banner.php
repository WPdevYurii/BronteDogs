<?php 
$banner = get_sub_field('banner_image');
?>
<section class="banner">
    <div class="banner__container">
        <?php if(!empty($banner)): ?>
        <div class="banner__wrap">
            <img src="<?php echo esc_url($banner['url']); ?>" alt="<?php echo esc_attr($banner['alt']); ?>">
        </div>
        <?php endif; ?>
    </div>
</section>