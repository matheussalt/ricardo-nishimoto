<?php
// Funções para limpar o header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_post_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wo_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
function wpassist_remove_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
} 
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

// Habilitar menus
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'MenuTopo' ),
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 // Filtro da tag title
 function twentythirteen_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentythirteen' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'twentythirteen_wp_title', 10, 2 );

function custom_excerpt2($length){
  global $post;
  $content = strip_tags($post->post_content);

  $content = (mb_strlen($content) > $length) ? mb_substr($content,0,($length - 3), 'utf8' ).'...' : $content;

  return $content;
}

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
	
function has_children() {
	global $post;

	$children = get_pages( array( 'child_of' => $post->ID ) );
	if( count( $children ) == 0 ) {
			return false;
	} else {
			return true;
	}
}

function catch_that_image($sizex) {
  global $post, $posts;
  $urldosite = get_site_url();
  $first_img = "";
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  
  if(empty($first_img)){ //Defines a default image
  		if ( has_post_thumbnail() ) {
			if($sizex == "1")
			{
				$fotoPega = wp_get_attachment_image_src(get_post_thumbnail_id(), 'big');
			}
			else if ($sizex == "2")
			{
				$fotoPega = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
			} else if ($sizex == "3")
			{
				$fotoPega = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
			}
			$first_img = $fotoPega[0];
		} 
		else if (!$output) 
		{
			$first_img = "";
		} 
		else
		{
			$first_img = $matches[1][0];
		}
		
		if (!$first_img)
		{
 			$first_img = "$urldosite/img/branco.png";
		}
  }
  return $first_img;
}

if ( ! function_exists( 'twentythirteen_paging_nav' ) ) :
/**
* Display navigation to next/previous set of posts when applicable.
*
* @since Twenty Thirteen 1.0
*/
function twentythirteen_paging_nav() {
global $wp_query;

// Don't print empty markup if there's only one page.
if ( $wp_query->max_num_pages < 2 ) return; ?>
<nav class="navigation paging-navigation" role="navigation">
  <h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'twentythirteen' ); ?></h1>
  <div class="nav-links">

    <?php if ( get_next_posts_link() ) : ?>
    <div class="nav-previous">
      <?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentythirteen' ) ); ?></div>
    <?php endif; ?>

    <?php if ( get_previous_posts_link() ) : ?>
    <div class="nav-next">
      <?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
    </div>
    <?php endif; ?>

  </div><!-- .nav-links -->
</nav><!-- .navigation -->
<?php
}
endif; ?>