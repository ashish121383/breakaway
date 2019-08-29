<?php 
/*
    Create Custom Settings Options 
*/
if(! function_exists('aplite_breakaway_custom_admin_settings') ){
    
    function aplite_breakaway_custom_admin_settings(){
        add_menu_page('Breakaway Theme Option', 'Breakaway Settings', 'manage_options', 'aplite_breakaway', 'aplite_breakaway_custom_admin_page_settings' , '
dashicons-admin-customizer', 110);
       add_submenu_page('aplite_breakaway', 'Breakaway Theme Option', 'General', 'manage_options', 'aplite_breakaway', 'aplite_breakaway_custom_admin_page_settings' );
       add_submenu_page('aplite_breakaway', 'Breakaway Css', 'Custom Css', 'manage_options', 'aplite_breakaway_css', 'aplite_breakaway_custom_admin_css_settings' );
       //custom Settings 
       add_action('admin_init','breakaway_custom_settings');
    }

    add_action('admin_menu','aplite_breakaway_custom_admin_settings');

}

function breakaway_custom_settings(){
    register_setting('breakaway-setting-group', 'first_name');
    add_settings_section( 'breakaway-sidebar-option', 'Theme Option', 'breakaway_sidebar_option', 'aplite_breakaway');
    //This is generate custom field and custom inputs
    add_settings_field( 'sidebar-name', 'First Name', 'breakaway_sidebar_name', 'aplite_breakaway','breakaway-sidebar-option');
}

function breakaway_sidebar_option(){
    echo 'Customize your theme information';
}

function breakaway_sidebar_name(){
    $first_name = get_option('first_name');
    echo '<input type="text" name="first_name" value="'.$first_name.'" placeholder="First Name"/>';
}

function aplite_breakaway_custom_admin_page_settings(){
    require_once(get_template_directory().'/inc/template/custom-option-settings.php');
}


function aplite_breakaway_custom_admin_css_settings(){
     

}


