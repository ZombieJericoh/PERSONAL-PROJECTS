<?php get_header(); ?>

<?php include('nav.php'); ?>

<section id="content" class="content-page">

	<div class="page-title-c">
		<h1 class="title-page"><?php the_title(); ?></h1>
		<span class="breadcrump"> Inicio - <?php the_title(); ?> </span>
	</div>
	 <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
           
</section><!-- End #content -->

<?php get_footer(); ?>