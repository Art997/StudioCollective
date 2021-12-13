<?php

function reg_mymenu() {
  register_nav_menu('header-menu',__( 'Menu główne' ));
}
add_action( 'init', 'reg_mymenu');
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(850, 9999);
add_image_size( 'size-post', 1200, 9999, false);
function webinsider_wp_custom_menu01() {     register_nav_menu('webinsider-wp-custom-menu01',__( 'sidebar' )); } add_action( 'init', 'webinsider_wp_custom_menu01' );
function zwp_init_widgets(){
$args = array(
'name' => 'sidebar',
'id' => 'identyfikator-panelu-bocznego',
'description' => 'Opis panelu bocznego powtarzającego się na różnych stronach',
'class' => 'sidebar-blog',
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget_title">',
'after_title' => '</h3>' );
register_sidebar( $args );
}
add_action('widgets_init',"zwp_init_widgets");
function usun_komentarz_pole_strona_www($fields) {
    unset($fields['url']);
    return $fields;
}

/**
 * Change default fields, add placeholder and change type attributes.
 *
 * @param  array $fields
 * @return array
 */
function wpse_62742_comment_placeholders( $fields )
{
	
   $fields['author']
	   = '<p class="comment-form-author">' . '<label for="author">' . _x( '', 'noun' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
		            '<input type="author" id="author" name="author" placeholder="Twoja nazwa*" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"size=30'. $aria_req . ' /></p>';
       
    
    $fields['email']  = '<p class="comment-form-email"><label for="email">' . _x( '', 'noun' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
		            '<input type="email" id="email" placeholder="E-mail*" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>';

    return $fields;
}

function wpsites_customize_comment_form_text_area($arg) {
    $arg['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( '', 'noun' ) . '</label><textarea id="comment" name="comment" rows="5" placeholder="Treść" aria-required="true"></textarea></p>';
    return $arg;
}


 ?>