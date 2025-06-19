<?php 
$banner = get_sub_field('banner_image');
$bm = get_sub_field('banner_bm');
?>
<section class="banner" style="margin-bottom: <?php echo $bm; ?>px;">
    <div class="banner__container">
        <?php if(!empty($banner)): ?>
        <div class="banner__wrap">
            <img src="<?php echo esc_url($banner['url']); ?>" alt="<?php echo esc_attr($banner['alt']); ?>">
        </div>
        <?php endif; ?>
    </div>
</section>