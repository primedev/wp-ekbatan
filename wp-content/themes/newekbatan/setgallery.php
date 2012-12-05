<?php 
session_start();
wp_reset_query();
wp_reset_postdata();
$term_slug=$_SESSION['term_slug'];

    $args = array('post_type'=>'gallery','tax_query' => array( array('taxonomy' => 'department', 'field' => 'slug','terms' =>$term_slug)));
    $loop=new Wp_Query($args);
    if($loop->have_posts()){
        while($loop->have_posts()){
        $loop->the_post();
        the_title();
        
?>
<div class="banner">
        <div>

<?php
    echo "<div style='left: 10px; top: 5px; opacity: 1;'><a href='".get_permalink($post->id)."' title=''>".get_the_post_thumbnail($post->id,'thumbnail')."</a></div>";
        }
    }
 ?>

        </div>
        <div class="next"></div>
        <div class="back"></div>
    </div>
    <script type="text/javascript">
        $(function(){
            $('div.banner > div div').cueslider();
        });
    </script>