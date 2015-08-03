<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- fuer eine statische Seite -->     
     
<div id="vertical-center">
        <nav id="headernav">
            <h1 id="TopHeadline"> <?php the_title(); ?> 
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
            </h1>
            <img src="<?php echo(get_template_directory_uri()); ?>/Logo_HFU_rz_white.png" id="HFU-Logo-White">
        </nav>

        <article>
            <?php the_content(); ?>
        </article>


<div id="sidebar"></div><!-- sidebar -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>