<?php 
get_header();
wp_reset_query();
wp_reset_postdata();
 ?>
<section class="content-article cover">
	<div class="title cover">	
		<div class="title-article left"></div>
		<div class="middle"></div>	
		<div class="end"></div>
		<div class="txt-article ">
		<?php the_title(); ?>
		</div>
	</div>
	<a href="#">
		<div class="ribbon">
			<div class="ribbon-left"></div>	
			<div class="tab"></div>
			<div class="txt-article2 ">
				دانلود فایل
			</div>
		</div>	
	</a>
	<a href="#">
		<div class="ribbon2 cover">
			<div class="ribbon-left2"></div>	
			<div class="tab2"></div>
			<div class="txt-article2 ">
			ارسال نظر
			</div>
		</div>	
	</a>
	<a href="#">
		<div class="ribbon3 cover">
			<div class="ribbon-left3"></div>	
			<div class="tab3"></div>
			<div class="txt-article2 ">
			بازگشت
			</div>
		</div>	
	</a>
	<div class="shadow">
		<p><?php 
		the_content();

		?></p>
	</div>

</section>

 <?php 
comments_template();
get_footer();
  ?>