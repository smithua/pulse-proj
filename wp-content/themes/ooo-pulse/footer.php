<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ooo-pulse
 */
?>

	</div><!-- #content -->

    <footer class="footer_main">
        <div class="footer_holder cf">
            <div class="contacts_wrap">
                <h2 class="title">
                    <strong>Контакты:</strong>
                </h2>
                <div class="table">
                    <span class="table_left">Телефон:</span>

                    <div class="table_right">
                        8 (3462) 45-30-76</br>
                        8 (9044) 72-05-08
                    </div>
                </div>
                <div class="table">
                    <span class="table_left">Адресс:</span>

                    <div class="table_right">
                        628400, Россия, Тюменская область, ХМАО, г. Сургут, ул.Нефтеюганское шоссе 62/1
                    </div>
                </div>
                <div class="table">
                    <span class="table_left">Email:</span>

                    <div class="table_right">
                        some-email@gmail.com
                    </div>
                </div>
            </div>

            <div class="services_wrap">
                <h2 class="title">
                    <strong>Услуги:</strong>
                </h2>
                <p><a href="#" class="service_item" onclick="return false;">- первая услуга</a></p>
                <p><a href="#" class="service_item" onclick="return false;">- первая услуга</a></p>
                <p><a href="#" class="service_item" onclick="return false;">- первая услуга</a></p>
                <p><a href="#" class="service_item" onclick="return false;">- первая услуга</a></p>
                <p><a href="#" class="service_item" onclick="return false;">- первая услуга</a></p>
            </div>
        </div>
    </footer><!-- .footer -->
    <footer class="footer_copyright">&#169; All rights reserved 2014</footer>

	<!-- <footer id="colophon" class="site-footer" role="contentinfo"> -->
		<!-- <div class="site-info"> -->
			<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'ooo-pulse' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'ooo-pulse' ), 'WordPress' ); ?></a> -->
			<!-- <span class="sep"> | </span> -->
			<!-- <?php printf( __( 'Theme: %1$s by %2$s.', 'ooo-pulse' ), 'ooo-pulse', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?> -->
		<!-- </div> -->
        <!-- .site-info -->
	<!-- </footer> -->
    <!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
