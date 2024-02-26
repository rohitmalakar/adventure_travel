<?php get_header(); ?>


<div id="wrapper">
  <?php get_template_part('template-parts/hero_slider'); ?>
  <?php get_template_part('template-parts/our-special'); ?>
  <?php get_template_part('template-parts/about-us-home-page'); ?>
  <?php get_template_part('template-parts/best-pick'); ?>
  <?php get_template_part('template-parts/trip-of-month'); ?>
  <?php get_template_part('template-parts/last-minute-trips'); ?>
  <?php get_template_part('template-parts/articles-home-page'); ?>

  <div class="position-relative py-5 block-testimonials">
    <div class="container py-3" id="container-special">
      <div class="row align-items-center">
        <div class="col-md-4">
          <div class="c-special_caption text-center text-md-left">
            <h6 class="text-white font-weight-bold letter-spacing-1">Testimonials</h6>
            <h2 class="text-white">Our Customer <br> Reviews</h2>
            <div class="my-3 my-md-5 mb-md-0 mx-auto d-flex justify-content-center justify-content-md-start">
              <div class="custom-slick_arrow custom-slick_prev">

              </div> <!-- custom slick prev ends here -->
              <div class="custom-slick_arrow custom-slick_next">

              </div> <!-- custom slick next ends here -->
            </div> <!-- custom slick arrow ends here -->
          </div> <!-- c special caption ends here -->
        </div> <!-- col md 4 ends here -->
        <div class="col-md-8 px-md-0 wrapper-right">
          <div class="wrapper-right_inside">
            <div class="slick-testimonials">
              
              <?php 
                $testimonialquery = new WP_Query(array(
                  'post_type' => 'testimonial',
                  'posts_per_page' => -1
                ));
                while($testimonialquery->have_posts()){
                  $testimonialquery->the_post(); ?>
                  <div>
                    <div class="row no-gutters align-items-center h-100 testimonial-bg">
                        <div class="col-sm-4 py-5 testimonial-left">
                          <div class="px-4">
                            <div class="testimonial-user mx-auto">
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'thumbnail', array()); ?>" alt="Testimonials">
                            </div>
                            <div class="testimonial-user_name text-black pt-3">
                              <?php the_field('review_author');?>
                            </div>       
                            <div class="testimonial-user_location pt-1">
                              <?php the_field('address');?>
                              
                            </div>
                          </div>              
                        </div><!-- col 4 user pics ends here -->
                        
                        <div class="col-sm-8 py-5 bg-white">
                          <div class="px-4 testimonial-content">
                            <h4><?php echo get_the_title(); ?></h4>
                            <div class="float-left">
                              <ul class="mb-0 rating list-unstyled">
                                <?php 
                                  $ratings = get_field('rating');
                                  $i = 1;
                                    while ($i <= $ratings) {
                                      echo '<li><a href=""></a></li>';
                                      $i++;
                                    }
                                ?>
                              </ul>of <?php the_field('rated_by_number_of_people'); ?> Reviews</div> 
                            <div class="d-inline-block ml-2 pl-2 mt-2 mt-sm-0 date mb-3 mb-xl-0">
                              <?php 
                                the_date('F, d, Y');
                              ?>
                            </div>
                            
                            <div class="mt-2"><?php the_content(); ?></div>
                          </div>
                      </div> <!-- col-8 testimonials ends here -->
                    </div> <!-- row testimonials ends here -->               
                  </div> <!-- our special slider item ends here -->
              <?php } wp_reset_query(); ?>

            </div> <!-- our special slider ends here -->
          </div>
        </div> <!-- col md 8 ends here -->
      </div> <!-- row block special ends here -->
    </div> <!-- container block special ends here -->
  </div> <!-- block special ends here -->    
</div> <!-- #wrapper ends here -->

<?php get_footer(); ?>