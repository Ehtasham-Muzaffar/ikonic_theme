<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    wp_head();
    ?>
</head>
<body>
    <div id="header">
        <div id="h_row1" class="header_rows">
                <div class="list1 list_email">
                        <img src="<?php echo get_template_directory_uri(); ?> /asstes/img/mail.png"/>
                        <p>info@greenlight-digital.co.uk </p>
                </div>
                <div class="list1 list_email">
                        <img src="<?php echo get_template_directory_uri(); ?> /asstes/img/phone.png"/>
                        <p>01234 567 890</p>
                </div>
                <div id="social_media" class="icons social_media_icons">
                        <img
                        src="<?php echo get_template_directory_uri();?>/asstes/img/facebook.png"
                        />
                         <img
                        src="<?php echo get_template_directory_uri();?>/asstes/img/instagram.png"
                        />
                         <img
                        src="<?php echo get_template_directory_uri();?>/asstes/img/linkdin.png"
                        />
                </div>
        </div>
        <div id="h_row2" class="header_rows">
                        <div id="logo" class="image">
                                        <img src="<?php echo get_template_directory_uri();?>/asstes/img/logo.png" />
                        </div>
                        <div id="menus" class="menu_list">
                                        <?php
                                        wp_nav_menu(array(
                                                "menu"=>"Menu 1",
                                                "menu_class"=>"custom_menu"
                                        ));
                                        ?>
                                        <button class="site_button button" id="h_button">
                                                        Talk To Us
                                        </button>
                        </div>
        </div>
        
    </div>
