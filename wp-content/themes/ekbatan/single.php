<?php 
wp_reset_query();
wp_reset_postdata();
the_ID();
the_title();
the_content();
the_comment();

 ?>
 <ul class="commentlist">
<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
</ul>