<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <nav class="side-menu d-xl-none initial-opacity" style="transform: translateX(110%);">
        <div class="inner">
            <?php wp_nav_menu([
                'theme_location' => 'mobile-menu',
                'menu_class' => 'menu menu-mobile',
                'container' => '',
                'depth' => 2,
            ]); ?>
        </div>
    </nav>


    <header>
        <div class="container">
            <nav id="primary" class="row header-nav">
                <div class="header-nav__wrap">
                    <div class="header-nav__left">
                        <?php $logo = get_field('header_logo', 'options');
                        if(!empty($logo)): ?>
                            <a href="<?= get_home_url(); ?>">
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                            </a>
                        <?php endif; ?>
                    </div>
                    
                    <div class="header-nav__right">
                        <?php wp_nav_menu(
                        [
                            'theme_location' => 'header-menu',
                            'container' => '',
                            'menu_class' => 'menu menu-header',
                            'depth' => 1,
                        ]
                        ); ?>
                        <button class="cta-button"><?php echo esc_attr('Get in touch'); ?></button>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>