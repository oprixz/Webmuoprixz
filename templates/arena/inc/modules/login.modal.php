<div id="modal-login" class="modal_div flex-c-c">
	<div class="modal-div">
		<div class="modal_close">
			<span></span>
			<span></span>
		</div>
		<!--modal_close-->
		<h1><?php echo lang('module_titles_txt_2'); ?></h1>
		<form id="login_form" class="formFull" method="post" action="<?php echo __BASE_URL__; ?>login/">
			<p><input type="text" placeholder="Login" name="webengineLogin_user" id="login_input" required></p>
			<p><input type="password" placeholder="Password" name="webengineLogin_pwd" id="password_input" required></p>
			<div class="forgot">
				<button type="submit" name="webengineLogin_submit" value="submit" class="button" style="min-width:150px;"><?php echo lang('login_txt_3'); ?></button>
				<a href="<?php echo __BASE_URL__; ?>forgotpassword/"><?php echo lang('login_txt_4'); ?></a>
			</div>
		</form>
	</div>
</div>