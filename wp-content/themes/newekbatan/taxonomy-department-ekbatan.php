<?php
session_start();
get_header();
include 'top.php';
include 'general-button.php';
$_SESSION['term_slug']='ekbatan';
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
						<img src="<?php bloginfo('template_url'); ?>/images/service-kanoon.png" alt="title" width="30" height="30" />
					</div>
					<div class="header-title">خدمات</div>
				</div>
			</div>
		</li>
		<div class="content">
			<div class="txt">
				<?php
					include 'services.php';
				 ?>
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
					//include "setgallery.php";
					get_template_part('gallery-ekbatan');
				?>
			</div>
		</div>
<?php 
include 'contact.php';
get_footer();
 ?>