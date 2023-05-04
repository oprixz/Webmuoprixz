<header class="header">
	<div class="header-wrapper flex-c-c">
		<a href="<?php echo __BASE_URL__; ?>" class="fixed-logo"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>white-logo.png" alt="Logo"></a>
		<div class="button-btn buttonDrop" data-class="menuBlock">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="menuBlock">
			<ul class="menu flex-c-c">
				<li><a href="<?php echo __BASE_URL__; ?>"><?php echo lang('menu_txt_1'); ?></a></li>
				<li><a href="<?php echo __BASE_URL__; ?>register/"><?php echo lang('menu_txt_3'); ?></a></li>
				<li class="menu-logo">
					<a href="<?php echo __BASE_URL__; ?>"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>dark-logo.png" alt="Logo"></a>
				</li>
				<li><a href="<?php echo __BASE_URL__; ?>info/"><?php echo lang('menu_txt_11'); ?></a></li>
				<li>
					<a data-class="m_3" class="menu-a"><?php echo lang('menu_txt_10'); ?></a>
					<ul class="dropDown-menu m_3">
						<li><a href="<?php echo __BASE_URL__; ?>rankings/level/"><?php echo lang('rankings_txt_1'); ?></a></li>
						<li><a href="<?php echo __BASE_URL__; ?>rankings/resets/"><?php echo lang('rankings_txt_2'); ?></a></li>
						<li><a href="<?php echo __BASE_URL__; ?>rankings/killers/"><?php echo lang('rankings_txt_3'); ?></a></li>
						<li><a href="<?php echo __BASE_URL__; ?>rankings/guilds/"><?php echo lang('rankings_txt_4'); ?></a></li>
						<li><a href="<?php echo __BASE_URL__; ?>rankings/gens/"><?php echo lang('rankings_txt_8'); ?></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<a href="<?php echo __BASE_URL__; ?>downloads/" class="download-fixed bright"><span><?php echo lang('menu_txt_7'); ?></span></a>
	</div>
</header>