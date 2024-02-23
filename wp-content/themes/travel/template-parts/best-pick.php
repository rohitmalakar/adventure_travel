<div class="py-5 mb-3 block-bestpick">
    <div class="container py-3">
    <div class="text-center">
        <h6 class="text-default font-weight-bold letter-spacing-1">START PLANNING YOUR</h6>
        <h2 class="mb-5">NEST 's Best Pick</h2>
    </div> <!-- title block best pick ends here -->

    <div class="row">
        <?php 
            $wowdelay = 0.15;
            $bestpickQuery = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'package',
                'meta_key' => 'best_pick',
                'meta_query' => array(
                    array(
                        'key' => 'best_pick',
                        'compare' => '=',
                        'value' => 1,
                        'type' => 'numeric'
                    )
                )
            ));
            while($bestpickQuery->have_posts()){
                $bestpickQuery->the_post(); ?>
                <div class="col-md-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="<?php echo $wowdelay; ?>s" data-wow-offset="50" >
                    <div class="card border-0 border-radius-0">
                        <a href="<?php the_permalink(); ?>" class="d-flex flex-column keyburn"><img src="<?php echo the_post_thumbnail_url('portrait'); ?>" class="img-fluid" alt="Best Pick"></a>
                        <div class="card-body bg-white pl-0 position-absolute bottom-0 z-index-1">
                        <h4 class="mb-0"><?php echo get_the_title(); ?></h4>
                        </div>
                    </div>
                    <div class="block-bestpick_info py-4">
                        <div class="row align-items-center">
                        <div class="col pb-md-3 pb-xl-0 d-flex align-items-center">
                            <span class="icon icon-pin mr-2"></span> 
                            <?php 
                                $terms = get_the_terms( $post, 'destination' );
                                foreach($terms as $term){
                                    if($term->parent == 0){
                                        echo $term->name;
                                    }
                                }
                            ?>
                        </div>
                        <div class="col pb-md-3 pb-xl-0 d-flex align-items-center"><span class="icon icon-time mr-2"></span><?php echo get_field('days'); ?> Days</div>
                        <div class="col pb-md-3 pb-xl-0 d-flex align-items-center text-right"><span class="icon icon-currency mr-2"></span> From: <strong>$<?php echo get_field('price');?></strong></div>
                        </div> <!-- row block best pick info ends here -->
                    </div> <!-- block best pick info ends here -->
                </div> <!-- col md 4 best pick ends here -->
                <?php $wowdelay += 0.15; ?>
        <?php } wp_reset_query(); ?>
        
        <div class="col-12 text-center">
        <a href="" class="mt-5 btn btn-outline-secondary border-radius-0">View All Tours</a>
        </div> <!-- view all button best pick ends here -->
    </div> <!-- row best pick ends here -->
    </div> <!-- container md block best pick ends here -->
</div> <!-- block best pick ends here -->
