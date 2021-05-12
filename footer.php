    </main>

    <hr />

    <footer class="container d-flex align-items-center justify-content-between py-5">
        <div class="py-5 text-center">
            &copy; 
            <?php

            bloginfo('name'); ?> <?php echo Date('Y');

            wp_nav_menu(array(
                'theme_location'  => 'contact',
                'menu_class'      => 'footer-nav-menu'
            ));

            ?>
        </div>

        <div class="py-5 text-right">
            <?php

            wp_nav_menu(array(
                'theme_location'  => 'social',
                'menu_class'      => 'footer-nav-menu'
            ));

            ?>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>