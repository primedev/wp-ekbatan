<?php
 session_start();
// get_header();
// include 'top.php';
 $_SESSION['term_slug']='kanoon';
//include 'general-button.php';
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
				<div class="icon-services-company"></div>
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
			include "setgallery.php";
		?>
	</div>
</div>

<?php 
get_template_part('generalbutton');

//get_template_part('contact');
// get_footer();
 ?>