<?php
 session_start();
// get_header();
// include 'top.php';
//include 'general-button.php';
$_SESSION['term_slug']='ekbatan';
?>
<li>
	<div class="header-bg">
		<div class="header-txt cover">
			<div class="header-icon">
				<div class="icon-article"></div>
			</div>
			<div class="header-title" >مقاله ها</div>
		</div>
	</div>
</li>
<div class="content">
	<div class="txt">
		<?php 
			include 'articles.php';
		?>
	</div>
</div>
<li>
	<div class="header-bg">
		<div class="header-txt cover">
			<div class="header-icon">
				<div class="icon-service-ekbatan"></div>
			</div>
			<div class="header-title">خدمات</div>
		</div>
	</div>
</li>
<div class="content">
	<div class="txt">
		<section class="marketing">
			<?php
				include 'services.php';
			?>
		 </section>
	</div>
</div>
<li>
	<div class="header-bg">
		<div class="header-txt cover">
			<div class="header-icon">
				<div class="icon-idea"></div>
			</div>
			<div class="header-title">ایده ها</div>
		</div>
	</div>
</li>
<div class="content">
	<div class="txt">
		<?php 
			include 'single-coments.php';
		?>
	</div>
</div>
<li>
	<div class="header-bg">
		<div class="header-txt cover">
			<div class="header-icon">
				<div class="icon-gallery"></div>
			</div>
			<div class="header-title">گالری</div>
		</div>
	</div>
</li>
<div class="content">
	<div class="txt">
		<?php 
			get_template_part('gallery-ekbatan');
		?>
	</div>
</div>
		
<?php 

get_template_part('generalbutton');

//include 'contact.php';
//get_footer();
 ?>
