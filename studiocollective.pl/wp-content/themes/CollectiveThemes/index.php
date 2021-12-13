<?php get_header('inne'); ?>

<div class="margin-bottom-ft">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10">
					
           <?php 
			if ( have_posts() ) : 
			  while ( have_posts() ) : 
				the_post(); 
				get_template_part( 'content' );
			  endwhile; 
			endif;
			?>
					<div class="strzalki-blog-kontener">
						
					<div class="alignright strz-blog" style="float:left"><?php previous_posts_link( 'Nowsze' ); ?></div>
						<div class="alignleft strz-blog" style="float:right"><?php next_posts_link( 'Starsze' ); ?></div>

	<div style="clear:both"></div>
				</div>	
				</div>
				<?php get_sidebar(); ?>
			</div>
			
		</div>

	</div>

	

 
 

<?php get_footer(); 
