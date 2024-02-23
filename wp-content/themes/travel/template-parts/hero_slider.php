<div id="slickTop" class="slick-default">
    <?php 
      $heroslider_slides = new WP_Query(array(
        'post_type' => 'package',
        'posts_per_page' => -1,
        'meta_key' => 'show_in_home_page_hero_slider',
        'meta_query' => array(
          array(
            'key' => 'show_in_home_page_hero_slider',
            'compare' => '=',
            'value' => 1,
            'type' => 'numeric'
            )
            ) 
          ));
         
          while($heroslider_slides->have_posts()){
            $heroslider_slides->the_post(); ?>

              <div class="position-relative">
                <img alt="hero" src="<?php the_post_thumbnail_url('pageBanner'); ?>" class="img-fluid">
                <div class="slick-caption d-flex align-items-center align-items-md-end align-items-xl-center position-absolute top-0 left-0 right-0 h-100 z-index-1 pb-md-4 pb-xl-0">
                  <div class="w-100">
                    <div class="container container-md">
                      <div class="row">
                        <div class="col-md-8 col-lg-5">
                          <h2 class="text-white"><?php the_title(); ?></h2>
                          <a href="<?php the_permalink(); ?>" class="mt-3 btn btn-default border-radius-0">Get Started</a>
                        </div> <!-- slick col md 4 ends here -->
                      </div> <!-- slick row ends here -->
                    </div> <!-- slick container ends here -->
                </div>
                </div> <!-- slick caption ends here -->
              </div> <!-- slick item 1 ends here -->
          <?php } wp_reset_query();
        ?>
  </div> <!-- slick-default ends here -->