<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ooo-pulse
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site wrapper">
<!-- 	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ooo-pulse' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div> -->

		<!-- <nav id="site-navigation" class="main-navigation" role="navigation"> -->
			<!-- <button class="menu-toggle"><?php _e( 'Primary Menu', 'ooo-pulse' ); ?></button> -->
			<!-- <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> -->
		<!-- </nav> -->
		<!-- #site-navigation -->
	<!-- </header> -->
	<!-- #masthead -->

    <header class="header cf">
        <div class="logo">
            <a href="/">PS</a>
            <p class="company_name">
                <span class="upper">ооо</span><span class="upper"> «пульс»</span>
            </p>
        </div>

        <nav class="main_nav cf">
            <ul class="cf">
                <li>
                    <a href="/about" class="about">О компании</a>
                </li><!--
             --><li>
                    <a href="#" class="products" onclick="return false;">Продукция</a>
                    <ul class="menu-extend cf">
                        <li><a href="/category/products/improvements" class="aaaaa">Благоустройство</a></li><!--
                     --><li><a href="/category/products/buildings" class="aaaaa">Строительство</a></li><!--
                     --><li><a href="/category/products/cast-products-1" class="aaaaa">Литая продукция 1</a></li><!--
                     --><li><a href="/category/products/cast-products-2" class="aaaaa">Литая продукция 2</a></li><!--
                     --><li><a href="/category/products/tactile-tiles" class="aaaaa">Тактильная плитка</a></li>
                    </ul>
                </li><!--
             --><li>
                    <a href="/projects" class="projects">Наши проекты</a>
                </li><!--
             --><li>
                    <a href="/contacts" class="contacts">Контакты</a>
                </li>
            </ul>
        </nav>

        <div class="contacts_block">
            <p class="work_tel">
                Телефон:&nbsp;&nbsp;&nbsp;&nbsp;8 (3462) 45-30-76</br>
                                        8 (9044) 72-05-08
            </p>
            <p class="work_time">
                Работаем:&nbsp;&nbsp;&nbsp;с 8 - 17 / Пн - Пт</br>
                с 8 - 14 / Сб</br>
                     выходной / Вс
            </p>
            <p class="email">
                some-email@gmail.com
            </p>
        </div>

        <div class="cart"><img src="wp-content/themes/ooo-pulse/image/cart.png" width="80"></div>
    </header><!-- .header-->
    <?php if (is_home())  { ?>
        <div class="slider_wrap">
            <img src="wp-content/themes/ooo-pulse/image/slider.jpg" width="1160" height="567">
            <div class="slider_title">Тротуарная плитка</div>

            <div class="slider_next next-l"></div>
            <div class="slider_next next-r"></div>

            <div class="dotstyle dotstyle-fillin">
                <ul>
                    <li class="current"><a href="#" onclick="return false;">Home</a></li>
                    <li class=""><a href="#" onclick="return false;">About</a></li>
                    <li><a href="#" onclick="return false;">Products</a></li>
                    <li><a href="#" onclick="return false;">Portfolio</a></li>
                </ul>
            </div>

        </div><!-- .slider_wrap-->

        <div class="advantage_wrap cf">
            <h2 class="title">
                <span class="upper"><strong>Наши преимущества</strong></span>
            </h2>

            <figure class="advantage checkmark_block">
                <p class="advantage__image_block">
                    <img src="wp-content/themes/ooo-pulse/image/check-mark.png" width="115" height="115" alt="" />
                </p>
                <figcaption>Всегда</br>в наличии</figcaption>
            </figure>

            <figure class="advantage flexibility_block">
                <p class="advantage__image_block">
                    <img src="wp-content/themes/ooo-pulse/image/flexibility.png" width="115" height="115" alt="" />
                </p>
                <figcaption>Возможность производства по</br>Вашим размерам</figcaption>
            </figure>

            <figure class="advantage quality_block">
                <p class="advantage__image_block">
                    <img src="wp-content/themes/ooo-pulse/image/quality.png" width="115" height="115" alt="" />
                </p>
                <figcaption>Качественная продукция по</br>приемлемым ценам</figcaption>
            </figure>

            <figure class="advantage experience_block">
                <p class="advantage__image_block">
                    <img src="wp-content/themes/ooo-pulse/image/experience.png" width="115" height="115" alt="" />
                </p>
                <figcaption>Многолетний</br>опыт работы</figcaption>
            </figure>
        </div><!-- .advantage_wrap-->
    <?php } ?>
    <script src="wp-content/themes/ooo-pulse/js/dots.js"></script>
    <script>
        [].slice.call( document.querySelectorAll( '.dotstyle > ul' ) ).forEach( function( nav ) {
            new DotNav( nav, {
                callback : function( idx ) {
                    //console.log( idx )
                }
            } );
        } );
    </script>

	<div id="content" class="site-content">
