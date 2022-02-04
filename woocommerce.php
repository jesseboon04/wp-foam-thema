<?php get_header();?>
<?php

wp_nav_menu(
  array(
    'theme_location' => 'main-menu',
    'container_class' => 'my_extra_menu_class'
  )
);
?>
<?php
woocommerce_content();

?>
<?php get_footer();?>


