<footer class="block-footer position-relative bg-center-bottom bg-repeat-no bg-cover wow fadeIn" data-wow-duration="1s" data-wow-delay="0.15s" data-wow-offset="50"  style="background-image: url(<?php echo get_theme_file_uri(); ?>/src/assets/images/bg-departuredate.png);">
    <div class="container">
      <div class="p-4 p-md-5 bg-white-transparent">
      <div class="row py-3">
        <div class="col-sm-6 col-lg-3">
          <div class="footer-menu">
              <?php 
                $menu_obj = rohit_get_menu_by_location('footerMenuOne');
                if($menu_obj){
                  echo "<span class=\"d-block footer-menu_title\">" . $menu_obj->name  . "</span>";
                  wp_nav_menu(array(
                    'container'            => 'div',
                    'menu_class'           => 'menu pt-2 list-unstyled clearfix',
                    'echo'                 => true,
                    'fallback_cb'          => 'wp_page_menu',
                    'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'item_spacing'         => 'preserve',
                    'depth'                => 0,
                    'theme_location'       => 'footerMenuOne',
                  ));
                }
              ?>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="footer-menu">
              <?php 
                $menu_obj = rohit_get_menu_by_location('footerMenuTwo');
                if($menu_obj){
                  echo "<span class=\"d-block footer-menu_title\">" . $menu_obj->name  . "</span>";
                  wp_nav_menu(array(
                    'container'            => 'div',
                    'menu_class'           => 'menu pt-2 list-unstyled clearfix',
                    'echo'                 => true,
                    'fallback_cb'          => 'wp_page_menu',
                    'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'item_spacing'         => 'preserve',
                    'depth'                => 0,
                    'theme_location'       => 'footerMenuTwo',
                  ));
                }
              ?>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="footer-menu">
              <?php 
                $menu_obj = rohit_get_menu_by_location('footerMenuThree');
                if($menu_obj){
                  echo "<span class=\"d-block footer-menu_title\">" . $menu_obj->name  . "</span>";
                  wp_nav_menu(array(
                    'container'            => 'div',
                    'menu_class'           => 'menu pt-2 list-unstyled clearfix',
                    'echo'                 => true,
                    'fallback_cb'          => 'wp_page_menu',
                    'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'item_spacing'         => 'preserve',
                    'depth'                => 0,
                    'theme_location'       => 'footerMenuThree',
                  ));
                }
              ?>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="footer-menu">
            <span class="d-block footer-menu_title">Signup to our Newsletter</span>
            <p class="pt-2">Get news, special offers and fascinating articles.</p>
            <form class="theme-form_light">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Your Email Address">
              </div>
              <button type="submit" class="btn btn-green w-100">Subscribe</button>
            </form>
          </div>
        </div>
        <!-- footer 4 list menu + form ends here -->
        <div class="col-12 pt-5">
          <div class="c-association pt-5 text-center">
            <ul class="list-unstyled">
              <li class="pb-4 pb-lg-0 px-4"><img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/logo-tourism.jpg" alt="Tourism"></li>
              <li class="pb-4 pb-lg-0 px-4"><img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/logo-ntb.jpg" alt="NTB"></li>
              <li class="pb-4 pb-lg-0 px-4"><img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/logo-nma.jpg" alt="NMA"></li>
              <li class="pb-4 pb-lg-0 px-4"><img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/logo-taan.jpg" alt="Taan"></li>
              <li class="pb-4 pb-lg-0 px-4"><img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/logo-keep.jpg" alt="keep"></li>
              <li class="pb-4 pb-lg-0 px-4"><img src="<?php echo get_theme_file_uri(); ?>/src/assets/images/logo-tripadvisor.jpg" alt="Tripadvisor"></li>
            </ul>
          </div>
        </div>
      </div></div>
    </div> <!-- first footer container ends here -->
    <div class="container z-index-1 position-relative c-copyright">
      <div class="row py-4 d-flex justify-content-between align-items-center">
        <div class="col-md-8">© 2019 Nepal Explore Summit Trek Pvt. Ltd. All Rights Reserved.</div>
        <div class="col-md-4 pt-1 pt-md-0 text-md-right">Designed & Developed by: <span class="d-md-block"></span> <a href="https://codewing.co/" target="_blank" title="Designed & Developed by: Codewing Solutions">Codewing Solutions</a></div>
      </div>
    </div>
  </footer>


<!-- <footer>
    <?php 
        wp_nav_menu(array(
            'theme_lcation' => 'footerMenuOne'
        ));
    ?>
    <?php 
        wp_nav_menu(array(
            'theme_lcation' => 'footerMenuTwo'
        ));
    ?>
    <?php 
        wp_nav_menu(array(
            'theme_lcation' => 'footerMenuThree'
        ));
    ?>
</footer> -->

<?php wp_footer(); ?>
</body>
</html>