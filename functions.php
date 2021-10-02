<!-- code obtained from following freecodecamp.org's 'How to Create a Custom
WordPress Theme' video posted on their YouTube channel. Led by Andrew Wilson. -->
<!-- Video can be found at https://youtu.be/-h7gOJbIpmo -->
<!-- file serves to create a new menu area and enable the menu with init -->
<?php
function new_menu(){
    $locations = array(
        'primary' => "Desktop Primary Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}
add_action('init', 'new_menu');