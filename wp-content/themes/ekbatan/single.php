<?php 
wp_reset_query();
wp_reset_postdata();
 ?>

</ul>
	</section>
	<div class="line"></div>
<section id="end">
		<div class="content-end">
			<div class="text-left">
				<h1 class="contactus">درباره ما</h1>
				<div class="txt">
					<div class="content-txt f13">
						<table>
							<tr>
								<td class="tel"></td>
								<td class="txt">7331 879 511 98+</td>
							</tr>
							<tr>
								<td class="mobile"></td>
								<td class="txt">1157 816 915 98+</td>
							</tr>
							<tr>
								<td class="fax"></td>
								<td class="txt">7331 879 511 98+</td>
							</tr>
							<tr>
								<td class="adrs"></td>
								<td class="txt">مشهد - بلوار پیروزی - بین پیروزی 8-6 - پلاک 116 - واحد 5</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="text-right txr">
				<h1 class="contactus">ارتباط با ما...</h1>
				<div class="contact">
					بهترین راه برای رسیدن به من از طریق ایمیل است. لطفا در صورت تمایل با من تماس بگیرید در هر زمان برای نمایش داده های مربوط به کار هر. شما همیشه استقبال :)
					<br/>
					<?php 
					$args = array( 'post_type' => 'page', 'numberposts' => -1); 
						$pages = get_posts( $args );
						if ($pages) {
							foreach ( $pages as $post ) {
								setup_postdata($post);
								the_title();
								the_content();
								// the_attachment_link($post->ID, false);
								// the_excerpt();
							}
						}
					 ?>
					<!-- <form>
						<input type="text" class="name" id="name" />
						<input type="text" class="email" id="email" />
						<textarea class="textarea" id="texterea" placeholder="پیغام"></textarea>
						<input type="image" name="btnimg" id="btnimg" src="images/button_sendme.png" />
					</form> -->
				</div>
			</div>
		</div>
	</section>