<div class="bottom-menu">
	<ul>
		<li><a href="<?php echo __BASE_URL__; ?>">Home</a></li>
		<li><a href="<?php echo __BASE_URL__; ?>register">Registration</a></li>
		<li><a href="<?php echo __BASE_URL__; ?>downloads">Download</a></li>
		<li><a href="<?php echo __BASE_URL__; ?>rankings">Rankings</a></li>
		<li><a href="<?php echo __BASE_URL__; ?>rules">Terms Of Service</a></li>
	</ul>
</div>
<!-- bottom-menu -->
<div id="toTop"></div>

<div class="text-center">
	<?php templateLanguageSelector(); ?>
</div>

<br />

<div class="copyright">
	Copyright 2019 &copy; <a href="" class="templstock" style="color: #D500FF"><?php echo config('server_name', true); ?></a> <br>
	<span>This site is in no way associated with or endorsed by Webzen Inc.<br /><?php $handler->webenginePowered(); ?></span>
</div>