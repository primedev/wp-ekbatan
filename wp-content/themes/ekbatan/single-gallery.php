<?php 
	 get_header();
?>
<div class="content">
	<div class="pages cover">
		<section class='bigpart mlra relative overhidden left'>
			<div class="bigpic absolute">
				<?php

				$arg=array(
					'numberposts' =>'6',
					'orderby '=> 'menu_order', // This ensures images are in the order set in the page media manager  
			        'order'=> 'ASC',  
			        'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos  
			        'post_parent' => $post->ID, // Important part - ensures the associated images are loaded 
			        'post_status' => null, 
			        'post_type' => 'attachment'
			        ); 
				$images=get_children($arg);
				if($images){
					foreach ($images as $img) {
						$img_src=wp_get_attachment_image_src($img->ID,'full');
						echo "<div class='right' style=\"background-image:url('$img_src[0]');\"></div>";
					}
				}else echo 'هیچ عکسی در این مجموعه وجود ندارد';
				?>
			</div>
		</section>
		<section class="smallpart relative overhidden">
			<ul class="btn absolute">
				<?php 
					if($images){
					foreach ($images as $img) {
						$img_src=wp_get_attachment_image_src($img->ID,'thumbnail');
						echo "<li style=\"background-image:url('$img_src[0]');\"></li>";
					}
				}else echo 'هیچ عکسی در این مجموعه وجود ندارد';
				 ?>
			</ul>
			<div class="next butn absolute"></div>
			<div class="prev butn absolute"></div>	
		</section>
		
	</div>
</div>
<?php 
 get_footer();
?>