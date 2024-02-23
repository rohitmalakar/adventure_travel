<div class="py-5 mb-3 block-departuredate position-relative bg-center-bottom bg-repeat-no bg-cover wow fadeIn" data-wow-duration="1s" data-wow-delay="0.15s" data-wow-offset="50"  style="background-image: url(<?php echo get_theme_file_uri(); ?>/src/assets/images/bg-departuredate.png);">
    <div class="container py-3 position-relative z-index-1">
    <div class="text-center">
        <h6 class="text-green font-weight-bold letter-spacing-1">FIXED DEPARTURE DATE</h6>
        <h2 class="mb-5 text-white">Our Last Minute Trips</h2>
    </div> <!-- text center ends here -->
    <div class="table-responsive-sm">
        <table class="table table-hover text-white">
        <thead>
            <tr>
            <th scope="col">Departing</th>
            <th scope="col">Trip Name</th>
            <th scope="col">Days</th>
            <th scope="col">Price</th>
            <th scope="col" colspan="2">Space Left</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $lastMinTrip = new WP_Query(array(
                    'post_type' => 'last-minute-trip',
                ));
                while($lastMinTrip->have_posts()){
                    $lastMinTrip->the_post(); ?>
                    <tr>
                        <th scope="row">
                            <?php       
                                $departureDate = new DateTimeImmutable(get_field('departing_date'));
                                echo $departureDate->format('Y-M-d');
                            ?>
                        </th>
                        <td>
                            <?php
                                $tripNames = get_field('trip_name');
                                foreach($tripNames as $tripName){
                                    echo $tripName->post_title;
                                    $childpostId = $tripName->ID;
                                }
                            ?>
                        </td>
                        <td>
                            <?php 
                                $post_fields = get_fields( $childpostId );
                                echo $post_fields['days'];
                            ?>
                        </td>
                        <td>
                            $
                            <?php 
                                $post_fields = get_fields( $childpostId );
                                echo $post_fields['price'];
                            ?>
                        </td>
                        <td><?php the_field('space_left'); ?></td>
                        <td><a href="<?php the_permalink($childpostId);?>" class="btn btn-green float-right">View Trip</a></td>
                    </tr>
            <?php
                } wp_reset_query();
            ?>
        </tbody>
        </table>
    </div>
    </div> <!-- contianer departure date block ends here -->
</div> <!-- departure date block ends here --> 
