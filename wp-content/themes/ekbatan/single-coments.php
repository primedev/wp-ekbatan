<?php 
session_start();
$terms=$_SESSION['term_slug'];
if($terms=='ekbatan'){
	$post_id=73;
}else
	$post_id=77;
$arg=array(
	'author_email' => '',
	'ID' => '',
	'karma' => '',
	'number' => '',
	'offset' => '',
	'orderby' => '',
	'order' => 'ASC',
	'parent' => '',
	'post_id' => $post_id,
	'post_author' => '',
	'post_name' => '',
	'post_parent' => '',
	'post_status' => '',
	'post_type' => 'coments',
	'status' => '',
	'type' => '',
	'user_id' => '',
	'search' => '',
	'count' => false
	);
$comments = get_comments($arg);
	foreach($comments as $comment) :
		echo($comment->comment_author);
		echo($comment->comment_content);
		
	endforeach;