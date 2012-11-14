<?php
/*_-_-_-_-Marketting post type_-_-_-_-*/ 
add_action('init','create_marketting_type');
function create_marketting_type(){
	$labels=array(
		'name' => 'تبلیغات',
		'singular_name' => 'تبلیغات',
		'add_new' => 'افزودن تبلیغ',
		'add_new_item' => 'افزودن تبلیغ جدید',
		'edit_item' => 'ویرایش تبلیغ',
		'new_item' => 'تبلیغ جدید',
		'view_item' => 'نمایش تبلیغ',
		'search_items' => 'جستجوی تبلیغ',
		'not_found' => 'تبلیغ مورد نظر یافت نشد',
		'not_found_in_trash' => 'تبلیغ مورد نظر در زباله دان یافت نشد',
		'parent_item_colon' => 'تبلیغ',
		'menu_name' => 'تبلیغات'

		);
	$args=array(
		'label' => 'تبلیغات',
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title','editor', 'thumbnail','excerpt'),
		'has_archive' => true,
		'rewrite' => array('slug'=>'marketting'),
		'query_var' => true,
		'can_export' => true
		);
	register_post_type('marketting', $args);
}
/*_-_-_-_-Gallery post type_-_-_-_-*/ 
add_action('init','create_gallery_type');
function create_gallery_type(){
	$labels=array(
		'name' => 'تصاویر',
		'singular_name' => 'تصاویر',
		'add_new' => 'افزودن تصویر',
		'add_new_item' => 'افزودن تصویر جدید',
		'edit_item' => 'ویرایش تصویر',
		'new_item' => 'تصویر جدید',
		'view_item' => 'نمایش تصویر',
		'search_items' => 'جستجوی تصویر',
		'not_found' => 'تصویر مورد نظر یافت نشد',
		'not_found_in_trash' => 'تصویر مورد نظر در زباله دان یافت نشد',
		'parent_item_colon' => 'تصویر',
		'menu_name' => 'تصاویر'

		);
	$args=array(
		'label' => 'تصاویر',
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title','editor'),
		'has_archive' => true,
		'rewrite' => array('slug'=>'gallery'),
		'query_var' => true,
		'can_export' => true
		);
	register_post_type('gallery', $args);
}
/*_-_-_-_-Services post type_-_-_-_-*/ 
add_action('init','create_services_type');
function create_services_type(){
	$labels=array(
		'name' => 'خدمات',
		'singular_name' => 'خدمات',
		'add_new' => 'افزودن خدمات',
		'add_new_item' => 'افزودن خدمات جدید',
		'edit_item' => 'ویرایش خدمات',
		'new_item' => 'خدمات جدید',
		'view_item' => 'نمایش خدمات',
		'search_items' => 'جستجوی خدمات',
		'not_found' => 'خدمات مورد نظر یافت نشد',
		'not_found_in_trash' => 'خدمات مورد نظر در زباله دان یافت نشد',
		'parent_item_colon' => 'خدمات',
		'menu_name' => 'خدمات'

		);
	$args=array(
		'label' => 'خدمات',
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title','editor'),
		'has_archive' => true,
		'rewrite' => array('slug'=>'services'),
		'query_var' => true,
		'can_export' => true
		);
	register_post_type('services', $args);
}
/*_-_-_-_-Article post type_-_-_-_-*/ 
add_action('init','create_articles_type');
function create_articles_type(){
	$labels=array(
		'name' => 'مقاله ها',
		'singular_name' => 'مقاله ها',
		'add_new' => 'افزودن مقاله',
		'add_new_item' => 'افزودن مقاله جدید',
		'edit_item' => 'ویرایش مقاله',
		'new_item' => 'مقاله جدید',
		'view_item' => 'نمایش مقاله',
		'search_items' => 'جستجوی مقاله',
		'not_found' => 'مقاله مورد نظر یافت نشد',
		'not_found_in_trash' => 'مقاله مورد نظر در زباله دان یافت نشد',
		'parent_item_colon' => 'مقاله',
		'menu_name' => 'مقاله ها'

		);
	$args=array(
		'label' => 'مقاله ها',
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title','editor','excerpt','comments'),
		'has_archive' => true,
		'rewrite' => array('slug'=>'articles'),
		'query_var' => true,
		'can_export' => true
		);
	register_post_type('articles', $args);
}
/*_-_-_-_-Department taxonomy_-_-_-_-*/ 
$labels = array(
    'name'  => 'دپارتمان',
    'singular_name'  => 'دپارتمان ها',
    'search_items'  => 'جستجوی دپارتمان',
    'popular_items'  => 'بیشتر استفاده شده',
    'all_items'  => 'تمام دپارتمان',
    'parent_item'  => 'مادر دپارتمان',
    'edit_item'  => 'ویرایش دپارتمان',
    'update_item'  => 'بروزرسانی دپارتمان',
    'add_new_item'  => 'افزودن دپارتمان جدید',
    'new_item_name'    => 'دپارتمان جدید',
    'separate_items_with_commas'  => 'دپارتمان ها را با کاما جدا کنید',
    'add_or_remove_items'  => 'افزودن یا حذف دپارتمان',
    'choose_from_most_used'  => 'انتخاب از محبوبها'
);
$args=array(
	'label' => 'department',
	'labels' =>$labels,
	'public' => true,
	'show_in_nav_menus' => true,
	'show_ui' => true,
	'hierarchical' => false,
	'query_var' => true,
	

	);
register_taxonomy('دپارتمان', array('services','gallery'), $args);
 ?>