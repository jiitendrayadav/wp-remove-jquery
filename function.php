<?php 

// Check if admin 

if (is_admin()) {
   add_action("wp_enqueue_scripts", "remove_default_jquery_enqueue", 11); 
}

function remove_default_jquery_enqueue() { 

wp_deregister_script('jquery'); 

wp_register_script('jquery', "//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js", false, null); 
wp_enqueue_script('jquery'); 

}
