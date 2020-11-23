        <footer>
            <div class="container">
                <p id="copy">
                    <?php bloginfo('name'); ?> 
                    &copy; Rodrigue CALIMIA
                </p>
                <nav class="menu-footer">
                    <?php
                        wp_nav_menu ( array (
                        'theme_location' => 'footer-menu'
                        ) ); 
                    ?>
                </nav>
            </div>
        </footer>
        </div>
        <?php wp_footer(); ?>
    </body> 
</html>