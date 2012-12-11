 <?php 
session_start();
wp_reset_query();
wp_reset_postdata();
$term_slug=$_SESSION['term_slug'];
$ar_permalink=array();
$ar_thumbnail=array();
$counter=0;
$args = array('post_type'=>'gallery','tax_query' => array( array('taxonomy' => 'department', 'field' => 'slug','terms' =>$term_slug)));
$loop=new Wp_Query($args);
if($loop->have_posts()){
    while($loop->have_posts()){
    $loop->the_post();
    the_title();
    $ar_permalink[$counter]=get_permalink($post->id);
    $ar_thumbnail[$counter]=get_the_post_thumbnail($post->id,'thumbnail');
    $counter++;
    }
}
$counter2 =0;
?>
<div class="banner">
         <ul>
            <li style="left: -800px; top: 255px; opacity: 0; ">
                <a href="<?php echo $ar_permalink[$counter2]; ?>" title="" target="_blank">
                <?php 
                    echo $ar_thumbnail[$counter2++];
                 ?>
                 </a>
            </li>
            <li style="left: 50px; top: -20px; opacity: 1; ">
                <a href="<?php echo $ar_permalink[$counter2]; ?>" title="" target="_blank">
                <?php 
                    echo $ar_thumbnail[$counter2++];
                 ?>
                 </a>
            </li>
            <li style="left: 150px; top: 150px; opacity: 1; ">
                <a href="<?php echo $ar_permalink[$counter2]; ?>" title="" target="_blank">
                <?php 
                    echo $ar_thumbnail[$counter2++];
                 ?>
                 </a>
            </li>
            <li style="left: 250px; top: -20px; opacity: 1; ">
               <a href="<?php echo $ar_permalink[$counter2]; ?>" title="" target="_blank">
                <?php 
                    echo $ar_thumbnail[$counter2++];
                 ?>
                 </a>
            </li>
            <li style="left: 350px; top: 150px; opacity: 1; ">
                <a href="<?php echo $ar_permalink[$counter2]; ?>" title="" target="_blank">
                <?php 
                    echo $ar_thumbnail[$counter2++];
                 ?>
                 </a>
            </li>
            <li style="left: 450px; top: -20px; opacity: 1; ">
                <a href="<?php echo $ar_permalink[$counter2]; ?>" title="" target="_blank">
                <?php 
                    echo $ar_thumbnail[$counter2++];
                 ?>
                 </a>
            </li>
            <li style="left: 650px; top: -235px; opacity: 0; ">
                <a href="<?php echo $ar_permalink[$counter2]; ?>" title="" target="_blank">
                <?php 
                    echo $ar_thumbnail[$counter2++];
                 ?>
                 </a>
            </li> 
            <?php
                if ($counter>7) {
                    while ($counter2 == $counter) {
                        echo '<li style="left: 650px; top: -235px; opacity: 0; ">';
               
                        echo '<a href="<?php echo $ar_permalink[$counter2]; ?>" title="" target="_blank">';
                
                        echo $ar_thumbnail[$counter2++];
                
                        echo '</a>';
                        echo '</li>';
                    }
                }
            ?>
        </ul>
        <div class="next"></div>
        <div class="back"></div>
</div>
    <script type="text/javascript">
        $(function(){
            $('div.banner > ul li').cueslider();
        });
    </script>