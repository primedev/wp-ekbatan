<?php 
$arg=array('post_type'=>'articles','post_status' =>	'publish');
$loop=new WP_Query($arg);
?>
<section class="container-article">
	<?php
	while ($loop->have_posts()){
		$loop->the_post();
		echo '<article>';
			the_title();
			echo '<p>'.the_content('ادامه مطلب').'</p>';
		echo '</article>';
	}
	 ?>
</section>