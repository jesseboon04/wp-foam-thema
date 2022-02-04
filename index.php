<?php get_header();?>


<?php

wp_nav_menu(
  array(
    'theme_location' => 'extra-menu',

  )
);
?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
       <a href=" <?php the_permalink()?>"class="btn btn-green">Lees meer</a>
    <hr>

    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;

?>
<?php get_footer();?>


