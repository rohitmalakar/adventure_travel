<?php get_header(); ?>


<div id="wrapper">
  <?php get_template_part('template-parts/hero_slider'); ?>
  <?php get_template_part('template-parts/our-special'); ?>
  <?php get_template_part('template-parts/about-us-home-page'); ?>
  <?php get_template_part('template-parts/best-pick'); ?>


    <div class="mt-5 py-5 block-tripofmonth bg-repeat-no bg-center bg-cover wow fadeIn" data-wow-duration="1s" data-wow-delay="0.15s" data-wow-offset="50"  style="background-image: url(<?php echo get_theme_file_uri(); ?>/src/assets/images/bg-tripofmonth.jpg);">
      <div class="container py-3">
        <div class="row">
          <div class="col-md-7">
            <div class="image">
              <figure>
                <a href="">
                  <img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/trip-of-month.jpg" alt="Trip of Month">
                </a>
              </figure>
            </div>
          </div> <!-- col md 7 ends here -->
          <div class="col-md-5">
            <div class="pt-4 pt-md-0 pl-md-4 pr-md-5">
              <h6 class="text-default font-weight-bold letter-spacing-1 position-relative block-tripofmonth_subTitle pl-3 pl-md-0">FEATURED TRIP OF THE MONTH</h6>
              <h2 class="mb-4 block-tripofmonth_title">Langtang Valley Trek – 12 Days</h2>
              <p>A trek to the Langtang valley has to be one of the most rewarding of the short treks available anywhere in Nepal. The east-west running…</p>
              <p class="font-xs pt-2 pb-3">Starting From <span class="d-block block-tripofmonth_price text-primary font-weight-bold">$750</span></p>
              <a href="" class="btn btn-primary border-radius-0">Inquire Now</a>
            </div>
          </div> <!-- col md 5 ends here -->
        </div> <!-- row block trip of month ends here -->
      </div> <!-- container block trip of month ends here -->
    </div> <!-- block trip of month ends here -->
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
              <tr>
                <th scope="row">2018-02-25</th>
                <td>Manaslu Trek</td>
                <td>10</td>
                <td>$750</td>
                <td>8</td>
                <td><a href="" class="btn btn-green float-right">View Trip</a></td>
              </tr>
              <tr>
                <th scope="row">2018-02-25</th>
                <td>Annapurna Base Camp Trek</td>
                <td>10</td>
                <td>$750</td>
                <td>8</td>
                <td><a href="" class="btn btn-green float-right">View Trip</a></td>
              </tr>
              <tr>
                <th scope="row">2018-02-25</th>
                <td>Everest Base Camp Trek</td>
                <td>10</td>
                <td>$750</td>
                <td>8</td>
                <td><a href="" class="btn btn-green float-right">View Trip</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> <!-- contianer departure date block ends here -->
    </div> <!-- departure date block ends here --> 
    <div class="py-5 mb-3 block-latestarticle wow fadeIn" data-wow-duration="1s" data-wow-delay="0.15s" data-wow-offset="50" >
      <div class="container py-3">
        <div class="text-center">
          <h6 class="text-primary font-weight-bold letter-spacing-1">READ OUR</h6>
          <h2 class="mb-5">Latest Articles</h2>
        </div> <!-- text center ends here -->
        <div class="row h-100">
          <div class="col-md-4 mb-4 h-100">
            <div class="card border-radius-0">
              <div class="image">
                <figure>
                  <a href="">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/latest-article-1.png" alt="Latest Article Img">
                  </a>
                </figure>
              </div>
              <div class="card-body px-0">
                <h3 class="card-title mb-4">Kanchenjunga Base Camp Trek Itinerary</h3>
                <p class="mb-0 date letter-spacing-1">2018-03-02  -  BLOG</p>
              </div> <!-- card body article block ends here -->
            </div> <!-- card article block ends here -->
          </div>  <!-- col md 4 card article block ends here -->
          <div class="col-md-4 mb-4 h-100">
            <div class="card border-radius-0">
              <div class="image">
                <figure>
                  <a href="">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/latest-article-1.png" alt="Latest Article Img">
                  </a>
                </figure>
              </div>
              <div class="card-body px-0">
                <h3 class="card-title mb-4">7 Best Yoga Resorts in Nepal</h3>
                <p class="mb-0 date letter-spacing-1">2018-03-02  -  BLOG</p>
              </div> <!-- card body article block ends here -->
            </div> <!-- card article block ends here -->
          </div>  <!-- col md 4 card article block ends here -->
          <div class="col-md-4 mb-4 h-100">
            <div class="card border-radius-0">
              <div class="image">
                <figure>
                  <a href="">
                    <img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/latest-article-1.png" alt="Latest Article Img">
                  </a>
                </figure>
              </div>
              <div class="card-body px-0">
                <h3 class="card-title mb-4">Annapurna Circuit Trek Itinerary</h3>
                <p class="mb-0 date letter-spacing-1">2018-03-02  -  BLOG</p>
              </div> <!-- card body article block ends here -->
            </div> <!-- card article block ends here -->
          </div>  <!-- col md 4 card article block ends here -->
        </div> <!-- row card article ends here -->
      </div> <!-- container latest article ends here -->
    </div> <!-- latest article ends here -->       
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
                <div>
                  <div class="row no-gutters align-items-center h-100 testimonial-bg">
                      <div class="col-sm-4 py-5 testimonial-left">
                        <div class="px-4">
                          <div class="testimonial-user mx-auto">
                              <img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/img-special.jpg" alt="Testimonials">
                          </div>
                          <div class="testimonial-user_name text-black pt-3">
                            Chris Adams
                          </div>       
                          <div class="testimonial-user_location pt-1">
                            Cape Town Central, South Africa
                          </div>
                        </div>              
                      </div><!-- col 4 user pics ends here -->
                      <div class="col-sm-8 py-5 bg-white">
                        <div class="px-4 testimonial-content">
                          <h4>Manaslu circuit with group of 5</h4>
                          <div class="float-left">
                            <ul class="mb-0 rating list-unstyled">
                              <li><a href=""></a></li>
                              <li><a href=""></a></li>
                              <li><a href=""></a></li>
                            </ul>of 25 Reviews</div> 
                          <div class="d-inline-block ml-2 pl-2 mt-2 mt-sm-0 date mb-3 mb-xl-0">December, 23, 2018</div>
                          
                          <p class="mt-2">Thanks to NEST for organizing this wonderful trek and facilitating this amazing experience. NT our guide was excellent. He was always around to help and showed flexibility to ensure we where coping with every challenging day. He always had a joke on hand when things...</p>
                        </div>
                    </div> <!-- col-8 testimonials ends here -->
                  </div> <!-- row testimonials ends here -->               
                </div> <!-- our special slider item ends here -->

                
                <div>
                  <div class="row no-gutters align-items-center h-100 testimonial-bg">
                      <div class="col-sm-4 py-5 testimonial-left">
                        <div class="px-4">
                          <div class="testimonial-user mx-auto">
                              <img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/img-special.jpg" alt="Testimonials">
                          </div>
                          <div class="testimonial-user_name text-black pt-3">
                            Chris Adams
                          </div>       
                          <div class="testimonial-user_location pt-1">
                            Cape Town Central, South Africa
                          </div>
                        </div>              
                      </div><!-- col 4 user pics ends here -->
                      <div class="col-sm-8 py-5 bg-white">
                        <div class="px-4 testimonial-content">
                          <h4>Manaslu circuit with group of 5</h4>
                          <div class="float-left">
                            <ul class="mb-0 rating list-unstyled">
                              <li><a href=""></a></li>
                              <li><a href=""></a></li>
                              <li><a href=""></a></li>
                            </ul>of 25 Reviews</div> 
                          <div class="d-inline-block ml-2 pl-2 mt-2 mt-sm-0 date mb-3 mb-xl-0">December, 23, 2018</div>
                          
                          <p class="mt-2">Thanks to NEST for organizing this wonderful trek and facilitating this amazing experience. NT our guide was excellent. He was always around to help and showed flexibility to ensure we where coping with every challenging day. He always had a joke on hand when things...</p>
                        </div>
                    </div> <!-- col-8 testimonials ends here -->
                  </div> <!-- row testimonials ends here -->               
                </div> <!-- our special slider item ends here -->

                <div>
                  <div class="row no-gutters align-items-center h-100 testimonial-bg">
                      <div class="col-sm-4 py-5 testimonial-left">
                        <div class="px-4">
                          <div class="testimonial-user mx-auto">
                              <img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/img-special.jpg" alt="Testimonials">
                          </div>
                          <div class="testimonial-user_name text-black pt-3">
                            Chris Adams
                          </div>       
                          <div class="testimonial-user_location pt-1">
                            Cape Town Central, South Africa
                          </div>
                        </div>              
                      </div><!-- col 4 user pics ends here -->
                      <div class="col-sm-8 py-5 bg-white">
                        <div class="px-4 testimonial-content">
                          <h4>Manaslu circuit with group of 5</h4>
                          <div class="float-left">
                            <ul class="mb-0 rating list-unstyled">
                              <li><a href=""></a></li>
                              <li><a href=""></a></li>
                              <li><a href=""></a></li>
                            </ul>of 25 Reviews</div> 
                          <div class="d-inline-block ml-2 pl-2 mt-2 mt-sm-0 date mb-3 mb-xl-0">December, 23, 2018</div>
                          
                          <p class="mt-2">Thanks to NEST for organizing this wonderful trek and facilitating this amazing experience. NT our guide was excellent. He was always around to help and showed flexibility to ensure we where coping with every challenging day. He always had a joke on hand when things...</p>
                        </div>
                    </div> <!-- col-8 testimonials ends here -->
                  </div> <!-- row testimonials ends here -->               
                </div> <!-- our special slider item ends here -->


              </div> <!-- our special slider ends here -->
            </div>
          </div> <!-- col md 8 ends here -->
        </div> <!-- row block special ends here -->
      </div> <!-- container block special ends here -->
    </div> <!-- block special ends here -->    
  </div> <!-- #wrapper ends here -->

<?php get_footer(); ?>