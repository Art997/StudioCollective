<?php
if ( is_page('fotograf-slubny-malopolska') ) :
    get_header( 'home' );
elseif ( is_page('oferta-reportaz-slubny') ) :
    get_header( 'reportaz' );
else :
    get_header('inne');
endif;
?>
<?php
 while ( is_page('blog') ) :
	get_sidebar();
endwhile;      ?>


			<?php

			/* Start the Loop */
			
		
			while ( have_posts() ) :
				the_post();
				
			endwhile; // End of the loop.
			?>
	

<?php
wp_reset_query();

while ( have_posts() ) : the_post(); ?>

	<div class="margin-bottom-ft"style="min-height: 100%">
		<div class="container-fluid p-0" >
			
				
					
						
					
				<?php the_content(); ?>
				
		</div>
			</div>
<?php endwhile; ?>
<?php
get_footer(); ?>