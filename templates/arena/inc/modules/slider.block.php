<div class="infoBlock flex">
	<div class="infoBlock-buttons">
		<a href="<?php echo __BASE_URL__; ?>downloads/" class="downloadButton bright"><?php echo lang('menu_txt_7'); ?></a>
		<div class="accBlock">
			<?php if(isLoggedIn()) { ?>
				<a href="<?php echo __BASE_URL__; ?>usercp/" class="persoanlAcc bright"><?php echo lang('usercp_menu_title'); ?></a>
				<p><a href="<?php echo __BASE_URL__; ?>logout/" class="bright"><?php echo lang('menu_txt_6'); ?></a></p>
			<?php } else { ?>
				<a href="#modal-login" class="open_modal persoanlAcc bright"><?php echo lang('menu_txt_4'); ?></a>
				<p><a href="<?php echo __BASE_URL__; ?>register/" class="bright"><?php echo lang('module_titles_txt_1'); ?></a></p>
			<?php } ?>
		</div>
	</div>
	<!--infoBlock-buttons-->
	<div class="swiper-container swiper-banner">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>banner.jpg" alt=""></div>
		</div>
		<!-- Add Arrows -->
		<div class="swiper-button-next slider-buttons"></div>
		<div class="swiper-button-prev slider-buttons"></div>
	</div>
</div>