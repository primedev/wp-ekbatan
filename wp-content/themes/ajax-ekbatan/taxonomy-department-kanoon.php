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
							<img src="<?php bloginfo('template_url'); ?>/images/article.png" alt="title" width="30" height="30" />
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
							<img src="<?php bloginfo('template_url'); ?>/images/services-company.png" alt="title" width="30" height="20" />
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
							<img src="<?php bloginfo('template_url'); ?>/images/idea.png" alt="title" width="30" height="30" />
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
							<img src="<?php bloginfo('template_url'); ?>/images/gallery.png" alt="title" width="30" height="25" />
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
 