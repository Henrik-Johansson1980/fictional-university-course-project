<div class="hero-slider">
  <?php 
  $Slides = new WP_Query(array(

    'posts_per_page'       => -1,
    'post_type'                => 'slide',
    'orderby'                  => 'title',
    'order'                      =>'ASC'
    ));
    
    while($Slides->have_posts()){
      $Slides->the_post();
      $image = get_field('slide_background_image');
      if( !empty($image) )
      ?>
      <div class="hero-slider__slide" style="background-image: url(<?php echo  $image['url']; ?>);">

        <div class="hero-slider__interior container">
          <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">
            <?php the_field('slide_header'); ?></h2>
            <p class="t-center"><?php the_field('slide_subtext'); ?></p>
            <p class="t-center no-margin"><a href="<?php echo get_permalink(); ?>" class="btn btn--blue">Learn more</a></p>
          </div>
        </div>
      </div>
    <?php
    }
  ?>
</div>