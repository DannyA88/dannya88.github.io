<?php
/*
    Template Name: Sitemap
 */

get_header(); ?>
<div class="content-inner">
<?php
		do_action( 'customify/content/before' );

		if ( ! customify_is_e_theme_location( 'single' ) ) {
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
		}
		do_action( 'customify/content/after' );
		?>

<h2>Pages</h2>
<ul>
<?php
wp_list_pages( array( 
  'exclude' => '',
  'title_li' => '',
) ); ?>
</ul>

<?php
foreach( get_post_types( array('public' => true) ) as $post_type ) {
  if ( in_array( $post_type, array('post','page','attachment', 'exclude' => 'customify_hook', 'exclude' => 'mphb_accommodation_type') ) ) {
    continue;
  }
  
  $pt = get_post_type_object( $post_type );

  query_posts('post_type=' . $post_type . '&posts_per_page=-1');
	if( have_posts() ){
		echo '<h2>' . $pt->labels->name . '</h2>';
		echo '<ul>';
	}
  while( have_posts() ) {
    the_post();
    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
  }
  echo '</ul>';
}
?>

<!-- <h2>Posts</h2> -->
<?php 
$cats = get_categories('exclude=');
foreach ($cats as $cat) {
  echo '<h3>' . $cat->cat_name . '</h3>';
  echo '<ul>';
  query_posts('posts_per_page=-1&cat=' . $cat->cat_ID);
  while(have_posts()) {
    the_post();
    $category = get_the_category();
    if ($category[0]->cat_ID == $cat->cat_ID) {
      echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>'; 
    }
  }
  echo '</ul>';
}
?>
</div>
<?php
get_footer();
