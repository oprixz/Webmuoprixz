<div class="fixedInfoBlock">
	<div class="fixedInfoBlock-close buttonDrop" data-class="modalBlock">
		<span></span>
		<span></span>
		<i></i>
	</div>
	<div class="modalBlock">
		<?php if(isLoggedIn()) { ?>
		<a href="<?php echo __BASE_URL__; ?>usercp/" class="menu-a show t-center server-b">
			<img src="<?php echo __PATH_TEMPLATE_IMG__; ?>server-icon.png" alt="">
			<p><?php echo lang('module_titles_txt_3'); ?></p>
		</a>
		<?php } ?>
		<a href="#webengine-event-timers" class="open_modal t-center event-b">
			<img src="<?php echo __PATH_TEMPLATE_IMG__; ?>events-icon.png" alt="">
			<p>Event Timers</p>
		</a>
		<a href="<?php echo __BASE_URL__; ?>castlesiege/" class="menu-a show t-center server-b">
			<img src="<?php echo __PATH_TEMPLATE_IMG__; ?>castlesiege-icon.png" alt="">
			<p><?php echo lang('castlesiege_widget_title'); ?></p>
		</a>
		
		<?php if(config('language_switch_active',true)) { ?>
		<a href="#webengine-language-switcher" class="open_modal t-center event-b">
			<img src="<?php echo __PATH_TEMPLATE_IMG__; ?>switchlanguage-icon.png" alt="">
			<p><?php echo lang('switch_lang'); ?></p>
		</a>
		<?php } ?>
	</div>
</div>