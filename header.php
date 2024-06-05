<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="フロントエンドエンジニアを目指すNatsukoのポートフォリオ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="l-header p-header">
    <div class="u-wrapper">
        <div class="p-header-title">
            <img class="c-icon" src="<?php echo esc_url(get_template_directory_uri() .'/img/icon-bgnon.png'); ?>">
            <h1 class="c-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </h1>
        </div>
        <div class="p-nav">

        <button class="p-hbutton c-button">
                MENU
            </button>
            <nav class="p-gnav">
                <ul class="p-gnav-ul">
                    <li class="c-gnav-li">
                        <a href="<?php echo esc_url(home_url('/#about')); ?>">About</a>
                    </li>
                    <li class="c-gnav-li">
                        <a href="<?php echo esc_url(home_url('/#works')); ?>">Works</a>
                    </li>
                    <li class="c-gnav-li">
                        <a href="<?php echo esc_url(home_url('/#blog')); ?>">Blog</a>
                    </li>
                    <li class="c-gnav-li">
                        <a href="<?php echo esc_url('/contact/'); ?>">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>  
    </div>
</header>