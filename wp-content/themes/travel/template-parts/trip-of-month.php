<?php 
    $tripofmonth = new WP_Query(array(
        'posts_per_page' => 1,
        'post_type' => 'package',
        'meta_key' => 'featured_package',
        'meta_query' => array(array(
            'key' => 'featured_package',
            'compare' => '=',
            'value' => 1,
            'type' => 'numeric'
        ))
    ));
    while($tripofmonth->have_posts()){
        $tripofmonth->the_post(); ?>
        
            <div class="mt-5 py-5 block-tripofmonth bg-repeat-no bg-center bg-cover wow fadeIn" data-wow-duration="1s" data-wow-delay="0.15s" data-wow-offset="50"  style="background-image: url(<?php echo get_theme_file_uri(); ?>/src/assets/images/bg-tripofmonth.jpg);">
                <div class="container py-3">
                    <div class="row">
                        <div class="col-md-7">
                        <div class="image">
                            <figure>
                            <a href="">
                                <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="Trip of Month">
                            </a>
                            </figure>
                        </div>
                        </div> <!-- col md 7 ends here -->
                        <div class="col-md-5">
                        <div class="pt-4 pt-md-0 pl-md-4 pr-md-5">
                            <h6 class="text-default font-weight-bold letter-spacing-1 position-relative block-tripofmonth_subTitle pl-3 pl-md-0">FEATURED TRIP OF THE MONTH</h6>
                            <h2 class="mb-4 block-tripofmonth_title"><?php echo get_the_title(); ?></h2>
                            <p><?php 
                                if(has_excerpt()){
                                    echo get_the_excerpt() . "...";
                                }else{
                                    echo wp_trim_words( get_the_content(), 25);
                                }
                                ?>
                            </p>
                            <p class="font-xs pt-2 pb-3">Starting From <span class="d-block block-tripofmonth_price text-primary font-weight-bold">$<?php echo get_field('price'); ?></span></p>
                            <a href="" class="btn btn-primary border-radius-0">Inquire Now</a>
                        </div>
                        </div> <!-- col md 5 ends here -->
                    </div> <!-- row block trip of month ends here -->
                </div> <!-- container block trip of month ends here -->
            </div> <!-- block trip of month ends here -->

<?php 
    }
?>