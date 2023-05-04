<footer class="footer">
	<div class="container">
		<div class="flex-c-c fBlock">
			<a href=""><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>white-logo.png" alt=""></a>
			<div class="fBlock-text">
				<div style="margin-bottom:10px;">
					<a href="<?php echo __BASE_URL__; ?>tos/"><?php echo lang('footer_terms'); ?></a>
					<span style="padding:0px 5px;">|</span>
					<a href="<?php echo __BASE_URL__; ?>privacy/"><?php echo lang('footer_privacy'); ?></a>
					<span style="padding:0px 5px;">|</span>
					<a href="<?php echo __BASE_URL__; ?>refunds/"><?php echo lang('footer_refund'); ?></a>
					<span style="padding:0px 5px;">|</span>
					<a href="<?php echo __BASE_URL__; ?>contact/"><?php echo lang('footer_contact'); ?></a>
				</div>
				<p><?php echo langf('footer_copyright', array(config('server_name', true), date("Y"))); ?></p>
				<?php echo lang('footer_webzen_copyright'); ?><br /><br />
				<?php $handler->webenginePowered(); ?>
			</div>
		</div>
	</div>
</footer>