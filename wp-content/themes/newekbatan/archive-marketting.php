<section class="marketing">
<?php 
$arg=array('post_type'=>'marketting','posts_per_page' => 8,'post_status' =>	'publish');
$loop=new WP_Query($arg);
		while ($loop->have_posts()) {
			$loop->the_post();
			echo "<div class='part1 right'>";
				echo "<div class='bg-left-marketing'>";
					echo "<div class='small-part'>";
						the_title();
					echo "</br>";
						the_post_thumbnail();
						echo "<p>".the_content('ادامه مطلب...')."</p>";

					echo "</div>";
					$loop->the_post();
					echo "<div class='big-part'>";
						the_title();
					echo "</br>";
						the_post_thumbnail();
						echo "<p>".the_content('ادامه مطلب...')."</p>";
					echo "</div>";
				echo "</div>";
			echo "</div>";

		}
?>
</section>