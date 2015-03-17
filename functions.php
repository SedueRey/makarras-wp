<?php
/* 
  We want to load every content with lazy load to perform load time adding proper class to images in content
 */
function lazy_defer_load($content){
  $content_with_class = preg_replace("/<img(.*?)class=\"(.*?)\"(.*?)>/i", '<img$1class="$2 deferload"$3>', $content);
  return
    str_replace(' src="', ' data-original="', $content_with_class);
}

add_filter('the_content', 'lazy_defer_load');
//add_filter('the_content', 'add_image_lazy_class');

function register_my_menu() {
  register_nav_menu( 'main-menu',__( 'Main Menu' ) );
}

add_action( 'init', 'register_my_menu' );

register_sidebar( array(
  'name' => 'Izquierda',
  'description' => 'Widgets after Posts.',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
  'before_widget' => '<div class="box">',
  'after_widget' => '</div>'
));

register_sidebar(array(
  'name' => 'Header After Menu',
  'description' => 'Widgets en este area iran a la columna simple derecha.',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
  'before_widget' => '<div class="box">',
  'after_widget' => '</div>'
));

?>