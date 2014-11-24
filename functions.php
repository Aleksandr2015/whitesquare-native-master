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

//Регистрация виджета и области для него
function sidebar_left_function() {

	register_sidebar( array(
		'name' => 'Сайдбар слева',
		'id' => 'sidebar-left',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'sidebar_left_function' );

function sidebar_left_1_function() {

	register_sidebar( array(
		'name' => 'Сайдбар слева 1',
		'id' => 'sidebar-left-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'sidebar_left_1_function' );


?>