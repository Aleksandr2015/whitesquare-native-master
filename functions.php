<?php

//Добавляем поддержку нескольких меню
register_nav_menus(array(
    'primary' => 'Главное меню',      // Первое меню
    'second' => 'Дополнительное меню',      // Второе меню
));


//Добавляем .active 
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}




?>