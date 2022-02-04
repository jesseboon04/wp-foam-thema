<?php get_header();?>


<?php


wp_nav_menu(
    array(
        'theme_location' => 'main-menu',
        'container_class' => 'my_extra_menu_class'
    )
);
?>
<div class="bericht-page">
    <div class="nieuws-pagina-top"></div>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <?php if ( has_post_thumbnail()):?>
            <?php the_post_thumbnail('post-thumbnail')?>
        <?php endif ?>
        <h2 class="title-bericht"><?php the_title() ?></h2>
        <?php the_content() ?>

   <div class="nieuws-pagina-bottom"></div>

    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;

?>
</div>
<?php get_footer();?>


