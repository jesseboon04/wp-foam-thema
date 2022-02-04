<?php get_header();?>


<?php

wp_nav_menu(
  array(
    'theme_location' => 'extra-menu',
    'container_class' => 'my_extra_menu_class'
  )
);
?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <h1 class="title-bericht"><?php the_title() ?></h1>
        <?php the_content() ?>



    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;

?>
<div class="footer-extra-page"><?php get_footer();?></div>


