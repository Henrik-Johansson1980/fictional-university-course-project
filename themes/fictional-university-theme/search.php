<?php 
  get_header(); 
  pageBanner([
    'title' => 'Search Results',
    'subtitle' => 'You searched for &ldquo;' . esc_html( get_search_query() ) . '&rdquo;'
  ]);
?>
<div class="container container--narrow page-section">
  <?php if(have_posts()) :?>
    <?php while(have_posts()) : the_post() ?>
    <?php get_template_part('template-parts/content', get_post_type() ); ?>
    <?php endwhile; ?>
    <?php echo paginate_links(); ?>
  <?php else : ?>
    <?php echo '<h2 class="headline headline--small">No results   matched that search</h2>'; ?>
  <?php endif;?>
  <?php get_search_form(); ?>
</div>

<?php get_footer( ); ?>