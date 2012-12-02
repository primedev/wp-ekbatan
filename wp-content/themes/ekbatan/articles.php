<?php
session_start();
$term_slug=$_SESSION['term_slug'];
wp_reset_query();
wp_reset_postdata();

$args = array('post_type'=>'articles','tax_query' => array( array('taxonomy' => 'department', 'field' => 'slug','terms' =>$term_slug)));
$loop=new Wp_Query($args);
?>
<section class="container-article">
<?php
if($loop->have_posts()){
	$loop->the_post();
	echo '<article>';
			the_title();
			echo '<p>'.the_content('ادامه مطلب').'</p>';
	echo '</article>';
} 

?>
</section>