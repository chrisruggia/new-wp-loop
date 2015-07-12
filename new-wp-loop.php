<?php
			// set parameters for the new loop
			$args = array( 
				'page_id' => 3433,
				'posts_per_page' => 1
				);

				$temp = $wp_query; // set the current loop aside in a placeholder variable
				$wp_query= null; // clear the current loop
				$wp_query = new WP_Query(); // initialize query
				$wp_query->query($args); // what to get 

				while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

				<?php // do stuff with the post now! ?>
				<div>
					<h1><?php the_title(); ?></h1>
					<div>
					<?php the_content(); ?>
					</div>
				</div>

				<?php endwhile; // end the loop

				$wp_query = null; // clear the new loop
				$wp_query = $temp; // get the current loop back from its hiding place
				wp_reset_query(); // reset

?>
