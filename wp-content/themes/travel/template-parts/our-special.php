<div class="bg-cream py-5 block-special">
    <div class="container -fluid py-3" id="container-special">
        <div class="row align-items-center">
            <div class="col-md-4">
            <div class="c-special_caption wow fadeIn" data-wow-duration="1s" data-wow-delay="0.15s" data-wow-offset="50" >
                <h6 class="text-default font-weight-bold letter-spacing-1">OUR SPECIAL</h6>
                <h2>Off the Beaten Tours</h2>
                <p>Discover the different sides of the city and see what NEST has to offer.</p>
                <div class="my-5 mb-md-0 slick-primary d-flex">
                <div class="custom-slick_arrow custom-slick_prev">

                </div> <!-- custom slick prev ends here -->
                <div class="custom-slick_arrow custom-slick_next">

                </div> <!-- custom slick next ends here -->
                </div> <!-- custom slick arrow ends here -->
            </div> <!-- c special caption ends here -->
            </div> <!-- col md 4 ends here -->
            <div class="col-md-8 pr-0x wrapper-right">
            <div class="wrapper-right_inside"> 
                <div class="slick-customWidth slick-special wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.15s" data-wow-offset="50" >
                <?php 
                    $ourSpecialQuery = new WP_Query(array(
                        'post_type' => 'package',
                        'meta_key' => 'include_in_our_special_tours',
                        'meta_query' => array(
                            array(
                                'key' => 'include_in_our_special_tours',
                                'compare' => '=',
                                'value' => 1,
                                'type' => 'numeric'
                            )
                        )
                    ));
                    while($ourSpecialQuery->have_posts()){
                        $ourSpecialQuery->the_post();?>
                        <div>
                            <img alt="" src="<?php echo the_post_thumbnail_url( 'portrait' ); ?>" class="img-fluid">
                            <div class="slick-caption d-flex align-items-end position-absolute w-100 top-0 h-100 z-index-1">
                            <div class="p-4">
                                <h5 class="text-white d-block title-line"><?php echo get_the_title(); ?></h5>
                                <a href="<?php the_permalink();?>" class="btn btn-link">Discover More</a>
                            </div>
                            </div> <!-- slick caption ends here -->
                        </div> <!-- our special slider item ends here -->
                <?php } wp_reset_query(); ?>
            </div>
            </div> <!-- col md 8 ends here -->
            <div class="pl-3 pl-md-0 offset-md-4">
            <a href="" class="ml-3 mt-5 btn btn-outline-secondary border-radius-0">View All Tours</a>
            </div>
        </div> <!-- row block special ends here -->
    </div> <!-- container block special ends here -->
</div> <!-- block special ends here -->