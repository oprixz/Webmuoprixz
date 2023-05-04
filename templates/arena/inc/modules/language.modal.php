<div id="webengine-language-switcher" class="modal_div flex-c-c">
	<div class="modal-div">
		<div class="modal_close">
			<span></span>
			<span></span>
		</div>
		<h1><?php echo lang('switch_lang'); ?></h1>
		<ul class="webengine-language-switcher">
			<li><a href="<?php echo __BASE_URL__ . 'language/switch/to/en'; ?>" title="English"><img src="<?php echo getCountryFlag('US'); ?>" alt="English"/> EN</a></li>
			<li><a href="<?php echo __BASE_URL__ . 'language/switch/to/es'; ?>" title="Español"><img src="<?php echo getCountryFlag('ES'); ?>" alt="Español"/> ES</a></li>
			<li><a href="<?php echo __BASE_URL__ . 'language/switch/to/ph'; ?>" title="Filipino"><img src="<?php echo getCountryFlag('PH'); ?>" alt="Filipino"/> PH</a></li>
			<li><a href="<?php echo __BASE_URL__ . 'language/switch/to/pt'; ?>" title="Português"><img src="<?php echo getCountryFlag('BR'); ?>" alt="Português"/> BR</a></li>
			<li><a href="<?php echo __BASE_URL__ . 'language/switch/to/ro'; ?>" title="Romanian"><img src="<?php echo getCountryFlag('RO'); ?>" alt="Romanian"/> RO</a></li>
			<li><a href="<?php echo __BASE_URL__ . 'language/switch/to/cn'; ?>" title="Simplified Chinese"><img src="<?php echo getCountryFlag('CN'); ?>" alt="Simplified Chinese"/> CN</a></li>
			<li><a href="<?php echo __BASE_URL__ . 'language/switch/to/ru'; ?>" title="Russian"><img src="<?php echo getCountryFlag('RU'); ?>" alt="Russian"/> RU</a></li>
			<li><a href="<?php echo __BASE_URL__ . 'language/switch/to/lt'; ?>" title="Lithuanian"><img src="<?php echo getCountryFlag('LT'); ?>" alt="Lithuanian"/> LT</a></li>
		</ul>
	</div>
</div>