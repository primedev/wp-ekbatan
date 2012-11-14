<?php 
/*
Plugin Name: mahlad-ContactPlugin 
Plugin URI: https://github.com/mahlad/mahlad-wp-plugins/blob/master/contact.php
Description: 
Author: Mahla Delpak
Version: 0.1
Author URI: http://mahlad.ir
*/
add_action('admin_menu','register_custom_menu');
add_action('init','register_shortcode_menu');
function register_shortcode_menu(){
	add_shortcode('contact','user_contact_form');
}
//  		[contact title=تماس با ما id=1] محتوا [/contact]
//			[contact]
function user_contact_form($atts, $content = null){
	if(isset($_POST['usr_submit'])){
		echo 'yes';
	}
	$userData='
	<table>
		<caption>فرم ارسال نظر کاربر</caption>
		<form action="" method="post">
		<tr>
			<td><label for="usr_name">نام و نام خانوادگی:</label></td>
			<td><input type="text" name="usr_name" value="" /></td>
		</tr>
		<tr>
			<td><label for="usr_email">ایمیل:</label></td>
			<td><input type="text" name="usr_email" value="" /></td>
		</tr>
		<tr>
			<td><label for="usr_title">موضوع:</label></td>
			<td><input type="text" name="usr_title" value="" /></td>
		</tr>
		<tr>
			<td><label for="usr_content">محتوا:</label></td>
			<td><textarea name="usr_content"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="usr_submit" value="ارسال"></td>
		</tr>
		</form>
	</table>
	';
	return $userData;
}
function register_custom_menu(){
	add_menu_page('تماس با ما', 'تماس با ما', '8', 'contact', 'admin_contact_form', plugins_url('wpclass-20121111/images/icon.png'),'26');
}
function admin_contact_form(){
	if(isset($_POST['adm_submit'])){
		update_option('adm_title',$_POST['adm_title']);
		update_option('adm_email',$_POST['adm_email']);
		update_option('adm_html',$_POST['adm_html']);
	}
	$adm_title=get_option('adm_title');
	$adm_email=get_option('adm_email');
	$adm_html=get_option('adm_html');
?>
<div class="admcnt">
	<table>
		<form action="" method="post">
			<tr>
				<td>
					<label for="adm_email">ایمیل گیرنده:</label>
				</td>
				<td>
					<input type="text" name="adm_email" value="<?php echo $adm_email; ?>"/>
				</td>
			</tr>
			<tr>
				<td>
					<label for="adm_title">عنوان ایمیل های دریافتی:</label>
				</td>
				<td>
					<input type="text" name="adm_title" value="<?php echo $adm_title ?>"/>
				</td>
			</tr>
			<tr>
				<td>
					<label for="adm_html">قالب html:</label>
				</td>
				<td>
					<textarea cols="100" rows="10" name="adm_html"><?php echo $adm_html; ?></textarea>
					<br />
				    %name% = نام ارسال کننده نامه
				    <br />
				    %email% = ایمیل ارسال کننده
				    <br />
				    %subject% = عنوان نامه
				    <br />
				    %content% = متن نامه
				    <br />
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="adm_submit" value="ذخیره"/>
				</td>
			</tr>
		</form>
	</table>
</div>
<?php
}
 ?>