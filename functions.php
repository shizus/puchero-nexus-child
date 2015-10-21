<?php 

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
register_sidebar(array(
	'name'=> 'Header',
	'id' => 'top_sidebar',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
));

// agrego pre-built layout

function mytheme_prebuilt_layouts($layouts){
    $layouts['home-page'] = array (// We'll add a title field
        'name' => __('Template de nota', 'Nexus'),    // Required
        'description' => __('Nota modelo para todos', 'Nexus'),    // Optional
        
  'widgets' => 
  array (
    0 => 
    array (
      'type' => 'visual',
      'title' => '',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum mi non orci laoreet pharetra. Nam tincidunt condimentum dictum. In lectus turpis, auctor ac mollis in, bibendum id dui. Sed blandit mattis tempus. Proin interdum fringilla pulvinar. Phasellus dictum urna id dui condimentum tincidunt. Duis erat mauris, vestibulum vitae posuere et, consequat tempus nibh. Nullam diam massa, viverra sed ipsum faucibus, fringilla mattis odio. Praesent tempus, dolor in congue suscipit, nisl orci interdum erat, ac pulvinar purus ante quis nisi. Nam faucibus ligula nibh, nec pharetra elit egestas non. Vestibulum erat lorem, cursus porttitor imperdiet ac, maximus quis justo.</p>',
      'filter' => '1',
      'panels_info' => 
      array (
        'class' => 'WP_Widget_Black_Studio_TinyMCE',
        'raw' => false,
        'grid' => 0,
        'cell' => 0,
        'id' => 0,
        'style' => 
        array (
          'widget_css' => 'post-text post-first-paragraph',
          'background_display' => 'tile',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'visual',
      'title' => '',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum mi non orci laoreet pharetra. Nam tincidunt condimentum dictum. In lectus turpis, auctor ac mollis in, bibendum id dui. Sed blandit mattis tempus. Proin interdum fringilla pulvinar. Phasellus dictum urna id dui condimentum tincidunt. Duis erat mauris, vestibulum vitae posuere et, consequat tempus nibh. Nullam diam massa, viverra sed ipsum faucibus, fringilla mattis odio. Praesent tempus, dolor in congue suscipit, nisl orci interdum erat, ac pulvinar purus ante quis nisi. Nam faucibus ligula nibh, nec pharetra elit egestas non. Vestibulum erat lorem, cursus porttitor imperdiet ac, maximus quis justo.</p>',
      'filter' => '1',
      'panels_info' => 
      array (
        'class' => 'WP_Widget_Black_Studio_TinyMCE',
        'raw' => false,
        'grid' => 1,
        'cell' => 0,
        'id' => 1,
        'style' => 
        array (
          'widget_css' => 'post-text post-text-left',
          'background_display' => 'tile',
        ),
      ),
    ),
    2 => 
    array (
      'image' => 1309,
      'image_fallback' => '',
      'size' => 'full',
      'title' => false,
      'alt' => false,
      'url' => false,
      'bound' => true,
      'full_width' => true,
      'new_window' => false,
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Widget_Image_Widget',
        'raw' => false,
        'grid' => 1,
        'cell' => 1,
        'id' => 2,
        'style' => 
        array (
          'widget_css' => 'post-picture first-picture',
          'background_display' => 'tile',
        ),
      ),
    ),
    3 => 
    array (
      'type' => 'visual',
      'title' => '',
      'text' => '<p><b>Subtítulo</b></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum mi non orci laoreet pharetra. Nam tincidunt condimentum dictum. In lectus turpis, auctor ac mollis in, bibendum id dui. Sed blandit mattis tempus. Proin interdum fringilla pulvinar. Phasellus dictum urna id dui condimentum tincidunt. Duis erat mauris, vestibulum vitae posuere et, consequat tempus nibh. Nullam diam massa, viverra sed ipsum faucibus, fringilla mattis odio. Praesent tempus, dolor in congue suscipit, nisl orci interdum erat, ac pulvinar purus ante quis nisi. Nam faucibus ligula nibh, nec pharetra elit egestas non. Vestibulum erat lorem, cursus porttitor imperdiet ac, maximus quis justo.</p><p><b>Subtítulo 2<br /></b></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum mi non orci laoreet pharetra. Nam tincidunt condimentum dictum. In lectus turpis, auctor ac mollis in, bibendum id dui. Sed blandit mattis tempus. Proin interdum fringilla pulvinar. Phasellus dictum urna id dui condimentum tincidunt. Duis erat mauris, vestibulum vitae posuere et, consequat tempus nibh. Nullam diam massa, viverra sed ipsum faucibus, fringilla mattis odio. Praesent tempus, dolor in congue suscipit, nisl orci interdum erat, ac pulvinar purus ante quis nisi. Nam faucibus ligula nibh, nec pharetra elit egestas non. Vestibulum erat lorem, cursus porttitor imperdiet ac, maximus quis justo.</p>',
      'filter' => '1',
      'panels_info' => 
      array (
        'class' => 'WP_Widget_Black_Studio_TinyMCE',
        'raw' => false,
        'grid' => 2,
        'cell' => 0,
        'id' => 3,
        'style' => 
        array (
          'widget_css' => 'post-text post-second-text-block',
          'background_display' => 'tile',
        ),
      ),
    ),
    4 => 
    array (
      'image_fallback' => '',
      'image' => '',
      'size' => 'full',
      'title' => '',
      'alt' => '',
      'url' => '',
      'bound' => 'on',
      'full_width' => 'on',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Widget_Image_Widget',
        'raw' => false,
        'grid' => 3,
        'cell' => 0,
        'id' => 4,
        'style' => 
        array (
          'widget_css' => 'post-picture full-with-picture',
          'background_display' => 'tile',
        ),
      ),
    ),
    5 => 
    array (
      'type' => 'visual',
      'title' => '',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum mi non orci laoreet pharetra. Nam tincidunt condimentum dictum. In lectus turpis, auctor ac mollis in, bibendum id dui. Sed blandit mattis tempus. Proin interdum fringilla pulvinar. Phasellus dictum urna id dui condimentum tincidunt. Duis erat mauris, vestibulum vitae posuere et, consequat tempus nibh. Nullam diam massa, viverra sed ipsum faucibus, fringilla mattis odio. Praesent tempus, dolor in congue suscipit, nisl orci interdum erat, ac pulvinar purus ante quis nisi. Nam faucibus ligula nibh, nec pharetra elit egestas non. Vestibulum erat lorem, cursus porttitor imperdiet ac, maximus quis justo.</p><p><b>Otro Subtítulo<br /></b></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum mi non orci laoreet pharetra. Nam tincidunt condimentum dictum. In lectus turpis, auctor ac mollis in, bibendum id dui. Sed blandit mattis tempus. Proin interdum fringilla pulvinar. Phasellus dictum urna id dui condimentum tincidunt. Duis erat mauris, vestibulum vitae posuere et, consequat tempus nibh. Nullam diam massa, viverra sed ipsum faucibus, fringilla mattis odio. Praesent tempus, dolor in congue suscipit, nisl orci interdum erat, ac pulvinar purus ante quis nisi. Nam faucibus ligula nibh, nec pharetra elit egestas non. Vestibulum erat lorem, cursus porttitor imperdiet ac, maximus quis justo.</p>',
      'filter' => '1',
      'panels_info' => 
      array (
        'class' => 'WP_Widget_Black_Studio_TinyMCE',
        'raw' => false,
        'grid' => 4,
        'cell' => 0,
        'id' => 5,
        'style' => 
        array (
          'widget_css' => 'post-text post-text-block',
          'background_display' => 'tile',
        ),
      ),
    ),
    6 => 
    array (
      'type' => 'visual',
      'title' => '',
      'text' => '<p>Texto de la izquierda de la imagen. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum mi non orci laoreet pharetra. Nam tincidunt condimentum dictum. In lectus turpis, auctor ac mollis in, bibendum id dui. Sed blandit mattis tempus. Proin interdum fringilla pulvinar. Phasellus dictum urna id dui condimentum tincidunt. Duis erat mauris, vestibulum vitae posuere et, consequat tempus nibh. Nullam diam massa, viverra sed ipsum faucibus, fringilla mattis odio. Praesent tempus, dolor in congue suscipit, nisl orci interdum erat, ac pulvinar purus ante quis nisi. Nam faucibus ligula nibh, nec pharetra elit egestas non. Vestibulum erat lorem, cursus porttitor imperdiet ac, maximus quis justo. </p><p> </p>',
      'filter' => '1',
      'panels_info' => 
      array (
        'class' => 'WP_Widget_Black_Studio_TinyMCE',
        'raw' => false,
        'grid' => 5,
        'cell' => 0,
        'id' => 6,
        'style' => 
        array (
          'widget_css' => 'post-text post-text-left post-last-paragraph',
          'background_display' => 'tile',
        ),
      ),
    ),
    7 => 
    array (
      'image' => 1145,
      'image_fallback' => '',
      'size' => 'full',
      'title' => false,
      'alt' => false,
      'url' => false,
      'bound' => true,
      'full_width' => true,
      'new_window' => false,
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Widget_Image_Widget',
        'raw' => false,
        'grid' => 5,
        'cell' => 1,
        'id' => 7,
        'style' => 
        array (
          'widget_css' => 'post-picture last-picture',
          'background_display' => 'tile',
        ),
      ),
    ),
    8 => 
    array (
      'type' => 'visual',
      'title' => '',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum mi non orci laoreet pharetra. Nam tincidunt condimentum dictum. In lectus turpis, auctor ac mollis in, bibendum id dui. Sed blandit mattis tempus. Proin interdum fringilla pulvinar. Phasellus dictum urna id dui condimentum tincidunt. Duis erat mauris, vestibulum vitae posuere et, consequat tempus nibh. Nullam diam massa, viverra sed ipsum faucibus, fringilla mattis odio. Praesent tempus, dolor in congue suscipit, nisl orci interdum erat, ac pulvinar purus ante quis nisi. Nam faucibus ligula nibh, nec pharetra elit egestas non. Vestibulum erat lorem, cursus porttitor imperdiet ac, maximus quis justo.</p>',
      'filter' => '1',
      'panels_info' => 
      array (
        'class' => 'WP_Widget_Black_Studio_TinyMCE',
        'raw' => false,
        'grid' => 6,
        'cell' => 0,
        'id' => 8,
        'style' => 
        array (
          'widget_css' => 'post-text post-text-block',
          'background_display' => 'tile',
        ),
      ),
    ),
  ),
  'grids' => 
  array (
    0 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'row_css' => 'post-text post-first-paragraph',
        'background_display' => 'tile',
      ),
    ),
    1 => 
    array (
      'cells' => 2,
      'style' => 
      array (
        'background_display' => 'tile',
      ),
    ),
    2 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
    3 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
    4 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
    5 => 
    array (
      'cells' => 2,
      'style' => 
      array (
        'background_display' => 'tile',
      ),
    ),
    6 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
  ),
  'grid_cells' => 
  array (
    0 => 
    array (
      'grid' => 0,
      'weight' => 1,
    ),
    1 => 
    array (
      'grid' => 1,
      'weight' => 0.24999999812500001,
    ),
    2 => 
    array (
      'grid' => 1,
      'weight' => 0.75000000187500004,
    ),
    3 => 
    array (
      'grid' => 2,
      'weight' => 1,
    ),
    4 => 
    array (
      'grid' => 3,
      'weight' => 1,
    ),
    5 => 
    array (
      'grid' => 4,
      'weight' => 1,
    ),
    6 => 
    array (
      'grid' => 5,
      'weight' => 0.24999999812500001,
    ),
    7 => 
    array (
      'grid' => 5,
      'weight' => 0.75000000187500004,
    ),
    8 => 
    array (
      'grid' => 6,
      'weight' => 1,
    ),
  ),
);
    return $layouts;

}
add_filter('siteorigin_panels_prebuilt_layouts','mytheme_prebuilt_layouts');
