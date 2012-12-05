<?php 
	get_header();
	wp_reset_query();
	wp_reset_postdata();
?>
	<section class="fancy">
		<article class="content-sp-market">
			<?php 
			the_ID();
			the_content();
			 ?>
		</article>
		
	</section>
</body>
</html>