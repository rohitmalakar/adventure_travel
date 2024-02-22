
<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=about-us' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
    <div class="bg-mountain py-5 block-welcome bg-repeat-no bg-center-top bg-cover" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">
      <div class="container py-3">
        <div class="row align-items-md-center align-items-lg-end">
          <div class="col-md-5">
            <img src="<?php echo get_field('side_image')['sizes']['large']; ?>" alt="welcome adventure" class="img-fluid">
            <div class="block-welcome_img block-welcome_img-1 d-none">
              <div class="iframe-round">
                <div class="crop">
                  <img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/welcome-0.png" alt="welcome adventure" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="block-welcome_img block-welcome_img-2 d-none">
              <div class="iframe-round">
                <div class="crop">
                  <img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/welcome-1.png" alt="welcome adventure" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="block-welcome_img block-welcome_img-3 d-none">
              <div class="iframe-round">
                <div class="crop">
                  <img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/welcome-2.png" alt="welcome adventure" class="img-fluid">
                </div>
              </div>
            </div>
          </div> <!-- col md 4 ends here -->
          <div class="col-md-7 pt-5 pt-md-0 pl-md-5">
            <div class="c-special_caption wow fadeIn">
              <?php echo the_field('intro_text'); ?>
            </div> <!-- c special caption ends here -->
            <a href="<?php echo site_url('/about-us')?>" class="mt-3 btn btn-outline-secondary border-radius-0">Know More About Us</a>
          
          </div>
        </div> <!-- row block welcome adventure ends here -->
      </div> <!-- container block welcome adventure ends here -->
    </div> <!-- block welcome adventure ends here  -->
  <?php endwhile;
    // reset post data (important!)
    wp_reset_postdata();
    // wp_reset_query();
  ?>