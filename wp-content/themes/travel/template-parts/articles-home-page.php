<div class="py-5 mb-3 block-latestarticle wow fadeIn" data-wow-duration="1s" data-wow-delay="0.15s" data-wow-offset="50" >
    <div class="container py-3">
      <div class="text-center">
        <h6 class="text-primary font-weight-bold letter-spacing-1">READ OUR</h6>
        <h2 class="mb-5">Latest Articles</h2>
      </div> <!-- text center ends here -->
      <div class="row h-100">
        <?php 
          $posts_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => '3'
          ));
          while($posts_query->have_posts()){
            $posts_query->the_post();?>
            <div class="col-md-4 mb-4 h-100">
              <div class="card border-radius-0">
                <div class="image">
                  <figure>
                    <a href="<?php the_permalink(); ?>">
                      <img src="<?php the_post_thumbnail_url('medium_large');?>" alt="Latest Article Img">
                    </a>
                  </figure>
                </div>
                <div class="card-body px-0">
                  <h3 class="card-title mb-4"><?php the_title(); ?></h3>
                  <p class="mb-0 date letter-spacing-1"><?php echo get_the_date('Y-m-d'); ?>  - <?php if(get_post_type($post->ID) == 'post'){echo "BLOG"; }?></p>
                </div> <!-- card body article block ends here -->
              </div> <!-- card article block ends here -->
            </div>  <!-- col md 4 card article block ends here -->
        <?php } ?>
      </div> <!-- row card article ends here -->
    </div> <!-- container latest article ends here -->
  </div> <!-- latest article ends here -->     