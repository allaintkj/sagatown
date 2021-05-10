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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>