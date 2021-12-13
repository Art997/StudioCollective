<div class="container">
<div id="comments" class="comments-area">

	    <div class="comment">
                  <?php
                        $args = array(
                              'status' => 'approve',
                              'post_id' => get_the_ID(),
                              'orderby' => 'comment_date_gmt',
                              'order' => 'ASC'
                        );
                        $comments_query = new WP_Comment_Query;
                        $comments = $comments_query->query($args);

                        if( is_singular() && comments_open() && (get_option('thread_comments') == 1) ){
                              wp_enqueue_script('comment-reply', 'wp-includes/js/comment-reply', array(), false, true);
                        }
                  ?>

               
				   
			
                  <?php foreach ($comments as $comment){ ?>
			<div class="single-comment-container">
				<div class="border-comment">
					<div class="background-single-comment">
					
                      <h5 class="h5-blog-author"><?php comment_author(); ?>
							pisze: <p class="data-single-comment"><?php comment_date(); ?></p>
							</h5> 
                        
                              <?php if ($comment->comment_approved == '0') : ?>
                              Komentarz czeka na zatwierdzenie<br />
                              <?php endif; ?>
								
                            		<p class="text-single-comment"><?php echo $comment->comment_content; ?></p>
								
                              <?php
                                    $post_id = get_the_ID();
                                    $comment_id = get_comment_ID();

                                    $max_depth = get_option('thread_comments_depth');
                                    $default = array(
                                          'add_below'  => 'comment',
                                          'respond_id' => 'respond',
                                          'reply_text' => __('Reply'),
                                          'login_text' => __('Log in to Reply'),
                                          'depth'      => 1,
                                          'before'     => '',
                                          'after'      => '',
                                          'max_depth'  => $max_depth
                                    ); ?>
                                    <p class="reply-text-comment"> <?php
                                    	comment_reply_link($default,$comment_id,$post_id);  ?>
									</p>
                             
							
							</div>
                         </div>
					</div>
                  <?php }?>
				   
                   </div> 

<?php  add_filter('comment_form_defaults', 'wpsites_customize_comment_form_text_area');    ?>            
<?php add_filter( 'comment_form_default_fields', 'wpse_62742_comment_placeholders' );?>
<?php add_filter('comment_form_default_fields','usun_komentarz_pole_strona_www'); ?>
<?php comment_form(array('title_reply'=>'Zostaw komentarz')); ?>

</div><!-- #comments -->
</div>