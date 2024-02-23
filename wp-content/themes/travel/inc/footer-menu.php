<?php 
// for getting menu title
function rohit_get_menu_by_location($location) {
    if(empty($location)) return false;
  
    $locations = get_nav_menu_locations();
    if(!isset($locations[$location])) return false;
  
    return get_term( $locations[$location], 'nav_menu' );
  }