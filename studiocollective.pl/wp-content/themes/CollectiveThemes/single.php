<?php


get_header('inne');
?>
<div class="margin-bottom-ft">
		<div class="container-fluid">	
			<div class="row">
				<div class="col-xl-10">
                        <?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
	    
    					<article>
							<div class="img-post">
									<?php                              
									if ( has_post_thumbnail()  ) {                                
									the_post_thumbnail('size-post'); 
									}                              
									?>
								</div>
							<div class="pojed-wpis-kontener">
								
   						   	 <?php the_title('<h1>', '</h1>'); ?>
								<div class="border-h1-blog"></div>
								
								<div class="blog-przypisy">
									<div style="float:left" class="data-blog hov-blog-wpis">
										Dodano: <?php the_date('F j, Y'); ?>  
									</div> 
									<div style="float:left" class="blog-separator-wpis">
										<p>
											|	
										</p>
									</div>
									<div style="float:left" class="hov-blog-wpis">
										<?php the_category(' | ') ?> 
									</div>
									<div style="clear: both"></div>
									
								</div>
							<div class="content-blog-kontener">
    					  	 <?php the_content(); ?>
							</div>
								<br />
								<br />
								<br />
						<p class="tagi-blog"><?php the_tags('', ' |  ', '<br />' ); ?></p>
							<div class="alignleft strz-blog" style="float:left"><?php previous_post_link(); ?></div>
						<div class="alignright strz-blog" style="float:right"><?php next_post_link(); ?></div>
						
						</div><?php if ( comments_open() || get_comments_number() ) :
     					comments_template();
						 endif; ?> 
   						 </article>
					
	   						 <?php endwhile; ?>
	   						 <?php endif; ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php
get_footer(); ?>