<?php 
	 include './inc/header.php';
?>
<div class="content">
	<div class="pages cover">
		<section class='bigpart mlra relative overhidden left'>
			<div class="bigpic absolute">
				<?php 
				$path='images/slide';
				$img_arr=scandir($path);
				foreach ($img_arr as $img) {
					$img_type=explode('.',$img);
					$img_type=strtolower(end($img_type));
					if($img_type=='jpg')
					echo "<div class='right' style=\"background-image:url('$path/$img');\"></div>";

				}
				 ?>
			</div>
		</section>
		<section class="smallpart relative overhidden">
			<ul class="btn absolute">
				<?php 
				$small_path='images/slide/small';
				$simg_arr=scandir($small_path);
				foreach ($simg_arr as $simg) {
					$simg_type=explode('.',$simg);
					$simg_type=strtolower(end($simg_type));
					if($simg_type=='png'){
						echo "<li  style=\"background-image:url('$small_path/$simg');\"></li>";
					}
				}
				 ?>
			</ul>
			<div class="next butn absolute"></div>
			<div class="prev butn absolute"></div>	
		</section>
		
	</div>
</div>
<?php 
	include "./inc/footer.php";
?>