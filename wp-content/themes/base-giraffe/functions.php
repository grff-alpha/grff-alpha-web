<?php
wp_enqueue_script('jquery');

/*Menu register*/
add_action('init', 'register_giraffe_menu');
function register_giraffe_menu() {
	register_nav_menus(array('giraffe_menu'=> 'Menu Principal.', 'giraffe_menu_optional'=> 'Menu Opcional.'));
}

add_theme_support( 'post-thumbnails' );

register_sidebar(array(
	'name' => __( 'Home Page' ),
	'id' => 'home-page',
	'description' => __( 'Los widgets de esta area seran mostrados en la pagina Principal' ),
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</ li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));
register_sidebar(array(
	'name' => __( 'Sidebar Page' ),
	'id' => 'sidebar-page',
	'description' => __( 'Los widgets de esta area seran mostrados en la pagina de "EVENTOS"' ),
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));
register_sidebar(array(
	'name' => __( 'Blog Page' ),
	'id' => 'sidebar-blog',
	'description' => __( 'Los widgets de esta area seran mostrados en la pagina de "Blog"' ),
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));


register_sidebar(array(
	'name' => __( 'Footer' ),
	'id' => 'sidebar-footer',
	'description' => __( 'Los widgets de esta area seran mostrados en el inferior de la pagina' ),
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

/* Blog Comments */

function custom_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<div class="clear"></div>
	<div class="container_comments">
	<div class="commentRight">
		<?php printf(__('<cite class="fn">%s</cite><br />'), get_comment_author_link()) ?>
		<a class="commentInfo" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
			<?php printf(__('%1$s'), get_comment_date('F jS'),NULL) ?>
		</a>
		<?php edit_comment_link(__('(Edit)'),'  ','') ?>
      <div class="commentTexts"><?php comment_text() ?>
        <div class="reply">
          <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => __('Reply')))) ?>
        </div><!-- end reply -->
      </div><!-- end commentTexts -->
    </div><!-- end commentRight -->
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="commentLeft"> 
      <div class="comment-author vcard">
        <?php echo get_avatar($comment,$size='40'); ?> 
      </div><!-- end comment-author -->
    </div><!-- end commentLeft -->
	</div><!-- end container_comments --><?php
}
  /* includes */
  get_template_part('core/taxonomies');

?>
