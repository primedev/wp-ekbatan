<table style="color:#fff;">

 <?php 
 $arg=array('post_id' => $post->ID);
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
?>
</table>