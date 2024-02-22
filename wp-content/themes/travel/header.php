<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>
    <header class="masthead">
        <div class="py-2 py-md-3 py-md-2 bg-dark-purple masthead-info">
        <div class="container">
            <div class="d-md-flex">
            <h1 id="logo" class="mt-0 d-none d-md-block d-lg-none">
                <a href="<?php echo home_url(); ?>"><img alt="Adventure" src="<?php echo get_theme_file_uri(); ?>" title="Adventure" class="img-fluid"/></a>
            </h1> <!-- logo ends here -->
            <ul class="info list-unstyled mb-0 pl-0">
                <li class="d-inline-block mr-md-2">Nepal Gov. Reg. No: 116524/070/071</li>
                <li class="d-inline-block">Tourism Reg. No: 1644/070</li>
                <li class="d-inline-block">TAAN Reg No. 0668</li>
            </ul> <!-- register info ends here -->
            <ul class="list-unstyled pt-1 pt-md-0 mb-0 ml-auto text-md-right text-lg-left">
                <li class="d-inline-block">Phone: +977 1 4420444</li>
                <li class="d-inline-block pr-md-0">Cell: +977 9851052042</li>
            </ul> <!-- call info ends here -->
            </div> <!-- d flex header info ends here -->
        </div> <!-- header info contianer ends here -->
        </div> <!-- bg-default py-2 masthead-info ends here -->

        <div class="bg-black bg-black-transparent-md">
        <div class="container">
            <div class="d-md-flex">
            <h1 id="logo" class="d-md-none d-lg-block">
                <a href="<?php echo home_url(); ?>"><img alt="Adventure" src="<?php echo get_theme_file_uri(); ?>/src/assets/images/logo.png" title="Adventure" class="img-fluid"/></a>
            </h1> <!-- logo ends here -->
            <nav class="navbar navbar-default navbar-expand-md navbar-dark px-0 py-md-3 pb-md-0 pt-md-0 ml-auto align-self-center main-menu" id="mainMenu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topMenu" aria-controls="topMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="topMenu">
                  
                  <?php 
                    wp_nav_menu(array(
                    'theme_location'	=> "headerMenuLocation", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                    'menu_class'		=> "list-unstyled mb-0", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                    'depth'				=> "0", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                    'item_spacing'		=> "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
                    'add_li_class' => "submenu"
                    ) );
                  ?>
                </div> <!-- collapse navbar collapse ends here -->
            </nav> <!-- main menu ends here -->
            </div> <!-- d flex logo menu ends here -->
        </div> <!-- logo menu contianer ends here -->
        </div> <!-- bg-white-transparent py-2 logo menu ends here -->
    </header> <!-- header ends -->