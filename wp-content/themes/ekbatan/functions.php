<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
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
/*_-_-_-_-Comments post type_-_-_-_-*/ 
add_action('init','create_coments_type');
function create_coments_type(){
	$labels=array(
		'name' => 'ایده ها',
		'singular_name' => 'ایده ها',
		'add_new' => 'افزودن ایده',
		'add_new_item' => 'افزودن ایده جدید',
		'edit_item' => 'ویرایش ایده',
		'new_item' => 'ایده جدید',
		'view_item' => 'نمایش ایده',
		'search_items' => 'جستجوی ایده',
		'not_found' => 'ایده مورد نظر یافت نشد',
		'not_found_in_trash' => 'ایده مورد نظر در زباله دان یافت نشد',
		'parent_item_colon' => 'ایده',
		'menu_name' => 'ایده ها'

		);
	$args=array(
		'label' => 'ایده ها',
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
		'supports' => array('title','editor','comments'),
		'has_archive' => true,
		'rewrite' => array('slug'=>'coments'),
		'query_var' => true,
		'can_export' => true
		);
	register_post_type('coments', $args);
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
		'supports' => array('title','editor','thumbnail'),
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
		'supports' => array('title','editor','comments'),
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
	'hierarchical' => true,
	'query_var' => true,
	

	);
register_taxonomy('department', array('services','gallery','articles','coments'), $args);
/*_-_-_-_-Category taxonomy_-_-_-_-*/ 
// $labels = array(
//     'name'  => 'مجموعه گالری',
//     'singular_name'  => 'مجموعه گالری ها',
//     'search_items'  => 'جستجوی مجموعه گالری',
//     'popular_items'  => 'بیشتر استفاده شده',
//     'all_items'  => 'تمام مجموعه گالری',
//     'parent_item'  => 'مادر مجموعه گالری',
//     'edit_item'  => 'ویرایش مجموعه گالری',
//     'update_item'  => 'بروزرسانی مجموعه گالری',
//     'add_new_item'  => 'افزودن مجموعه گالری جدید',
//     'new_item_name'    => 'مجموعه گالری جدید',
//     'separate_items_with_commas'  => 'مجموعه گالری ها را با کاما جدا کنید',
//     'add_or_remove_items'  => 'افزودن یا حذف مجموعه گالری',
//     'choose_from_most_used'  => 'انتخاب از محبوبها'
// );
// $args=array(
// 	'label' => 'catGalery',
// 	'labels' =>$labels,
// 	'public' => true,
// 	'show_in_nav_menus' => true,
// 	'show_ui' => true,
// 	'hierarchical' => true,
// 	'query_var' => true,
	

// 	);
// register_taxonomy('catGalery', array('gallery'), $args);
/*_-_-_-_-Upload metabox_-_-_-_-*/ 
add_action('post_edit_form_tag', 'update_edit_form'); 
add_action('load-post.php', 'metabox_setup' );
add_action('load-post-new.php', 'metabox_setup' );
add_action('save_post', 'metabox_save', 10, 2 );


function update_edit_form() {  
    echo ' enctype="multipart/form-data"';  
}

function metabox_setup() {
	add_meta_box(
		'gsp_post_meta2',
		'فایل متن کامل',	
		'metabox_content',		
		'articles',				
		'side',		
		'high'	
	);

}

function metabox_content($post){
	$profile_picture =  get_post_meta( $post->ID, 'profile_picture', true );
	if($profile_picture['url']){
		$img = $profile_picture['url'];
		echo '<div id="profile_picture"><a href="'.$img.'" target="_blank"><img src="'.$img.'"></a>
		</div>
		<br />';	
	}

?>
	<input id="wp_custom_attachment" name="wp_custom_attachment" value="بارگزاری" size="25" type="file">
 <?php
}


function metabox_save($post_id){
	if(!empty($_FILES['wp_custom_attachment']['name'])) {	
		$supported_types = array('image/gif','image/bmp','image/jpeg','image/png','application/pdf','application/msword');  		
		$arr_file_type = wp_check_filetype(basename($_FILES['wp_custom_attachment']['name']));  
		$uploaded_type = $arr_file_type['type'];  
		if(in_array($uploaded_type, $supported_types)) {  
			$upload = wp_upload_bits($_FILES['wp_custom_attachment']['name'], null, file_get_contents($_FILES['wp_custom_attachment']['tmp_name'])); 
			if(isset($upload['error']) && $upload['error'] != 0) {  
				//wp_die('There was an error uploading your file. The error is: ' . $upload['error']);  
			} else {
				unset($upload['error']);
				$upload['file'] = str_replace(chr(92),"/",$upload['file']);
				update_post_meta($post_id ,'profile_picture', $upload);  
			}
		} else {
			//wp_die("The file type that you've uploaded is not a PDF.");  
		}
	} 
}
 ?>
