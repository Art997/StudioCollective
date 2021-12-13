<article class="wpis-kontener">
	<div class="wpis-wrapper">
		
			<figure class="figure-blog">
				<div class="blog-img-kontener">
					<div class="blog-img img-fluid">
				<a href="<?php the_permalink()?>" class="wpis-blog">
							<?php                              
                            if ( has_post_thumbnail()  ) {                                
                                the_post_thumbnail(); 
                            }                              
							?>
						</a>
					</div>
				</div>
				
				<figcaption>
					<a href="<?php the_permalink()?>" class="wpis-blog">
		<div class="blog-wpis-background">
			
	 	<?php the_title('<h2 class="blog-wpis-tytul">', '</h2>'); ?>
			<div class="blog-wpis-p">
     	  <?php the_excerpt() ?>
			<div class="blog-przypisy">
				<div class="data-blog hov-blog" style="float:left" >
					Dodano: <?php the_date('F j, Y'); ?>  </div> 
					<div style="float:left" class="blog-separator">
					<p>
					|	
					</p>
					</div>
				<div class="hov-blog" style="float:left" >
					<?php the_category(" | ") ?> 
				</div>
				</div>
					<div style="clear: both"></div>
				</div>
			</div> </a>
			</figcaption>
					
		</figure>
	  
	</div>
</article>


	