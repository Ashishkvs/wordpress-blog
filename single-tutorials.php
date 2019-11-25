<?php
/**
 * The template for displaying Tutorials posts
*/

get_header();
?>

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
              ?>
            <div class="">
                <h2 class="text-center"> <?php   the_title(); ?> </h2>
                <div class="jumbotron"> <?php the_content(); ?> </div>       
            </div>

			<?php	
			endwhile; // End of the loop.
			?>

<?php
get_footer();
