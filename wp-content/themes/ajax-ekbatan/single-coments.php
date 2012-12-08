<?php 
session_start();
$term_slug=$_SESSION['term_slug'];
wp_reset_query();
wp_reset_postdata();
if($term_slug=='kanoon')
	$post_id=77;
else 
	$post_id=73;
 ?>

<table style="color:#fff;">

 <?php
 $args = array( 
 	'post_type' => 'coments',
 	'include'         =>$post_id ,
 	'category'        =>$term_slug ,
 	'post_status'     => 'publish'
 	); 
	$pages = get_posts( $args );
	if ($pages) {
		foreach ( $pages as $post ) {
			setup_postdata($post);
			the_title();
			// comment_form($post_id);
			// comments_template();
			$arg=array('post_id' => $post_id);
			$comments = get_comments($arg);
				foreach($comments as $comment) :
					echo '<tr>';
						echo '<th>نام ارسال کننده:</th>';
						echo'<td>'.($comment->comment_author).'<td/>';
					echo '</tr>';
					echo '<tr>';
						echo '<th>تاریخ:</th>';
						echo '<td>'.($comment->comment_date).'<td/>';
					echo '</tr>';
					echo '<tr>';
						echo '<th>متن:</th>';
						echo '<td>'.($comment->comment_content).'<td/>';
					echo '</tr>';

				endforeach;
		}
	} 
 //$arg=array('post_id' => $post_id);
// $comments = get_comments($arg);
// 	foreach($comments as $comment) :
// 		echo '<tr>';
// 			echo '<th>نام ارسال کننده:</th>';
// 			echo'<td>'.($comment->comment_author).'<td/>';
// 		echo '</tr>';
// 		echo '<tr>';
// 			echo '<th>تاریخ:</th>';
// 			echo '<td>'.($comment->comment_date).'<td/>';
// 		echo '</tr>';
// 		echo '<tr>';
// 			echo '<th>متن:</th>';
// 			echo '<td>'.($comment->comment_content).'<td/>';
// 		echo '</tr>';

// 	endforeach;
	comment_form($post_id);
	//comments_template();
?>
</table>