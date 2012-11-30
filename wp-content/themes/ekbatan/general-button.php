			<li>
				<div class="header-bg">
					<div class="header-txt cover">
						<div class="header-icon">
							<img src="<?php bloginfo('template_url'); ?>/images/icon_digitalart.png" alt="title" width="30" height="30" />
						</div>
						<div class="header-title">مقاله ها</div>
					</div>
				</div>
			</li>
			<div class="content">
				<div class="txt">
					<?php 
						get_template_part('archive','articles');
					?>
				</div>
			</div>
			<li>
				<div class="header-bg">
					<div class="header-txt cover">
						<div class="header-icon">
							<img src="<?php bloginfo('template_url'); ?>/images/icon_digitalart.png" alt="title" width="30" height="30" />
						</div>
						<div class="header-title">تبلیغات</div>
					</div>
				</div>
			</li>
			<div class="content">
				<div class="txt rel">
					<?php 
						get_template_part('archive','marketting');
					?>
					<div class="sp-marketing">
						<iframe src="./special-marketing.php" id="if-sp-marketing">
						</iframe>
						<a id="fancy-close"></a>
					</div>
				</div>
				
			</div>
			