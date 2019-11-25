<?php get_header() ?>

<h2>Index page</h2>
 <!-- LIST ALL THE POST'S-THUMBNAIL  -->
<div class="row mb-2">
<?php
            
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

                get_template_part( 'template-parts/content/content', 'page-blog' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
            
            // pagination links for recent post more than 4 setting -> readings
            echo paginate_links();
            
            ?>

</div>
<h1>Custom Type Posts </h1>
<!-- //Custom posts Tutorials-->
<?php 
    $tutorials =new WP_Query( array(
        'posts_per_page' => 2,
        'post_type' => 'tutorials'
    ));

    while($tutorials -> have_posts()){
        $tutorials -> the_post(); // make data ready
        ?>
        <a href="<?php the_permalink();?>" > <?php the_title(); ?> </a>
        <p> <?php the_content(); ?></p>
        <?php
    }

?>
<?php get_footer() ?>