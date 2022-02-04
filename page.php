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
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>


        <?php the_content() ?>



    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;

?>
<?php get_footer();?>


