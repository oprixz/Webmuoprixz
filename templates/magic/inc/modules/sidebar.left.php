<?php if(!isLoggedIn()) { ?>
<a href="<?php echo __BASE_URL__; ?>register/" class="reg-button-button"><span>Register</span></a>
<div class="widget">
	<span class="widget-title">
		<?php echo lang('module_titles_txt_2'); ?>
	</span>	
	<div>
		<form action="<?php echo __BASE_URL__; ?>login/" method="post">
			<p class="formgroup f-login"><input type="text" id="loginBox1" name="webengineLogin_user" placeholder="User name"></p>
			<p class="formgroup p-login"><input type="password" id="loginBox2" name="webengineLogin_pwd" placeholder="Password"></p>
			<div class="login-buttons"><a href="<?php echo __BASE_URL__; ?>forgotpassword/"><?php echo lang('login_txt_4'); ?></a><button type="submit" name="webengineLogin_submit" value="submit" class="button-login"><?php echo lang('login_txt_3'); ?></button></div>
		</form>
	</div>
</div><!-- widget -->
<?php } else { ?>
<div class="widget-usercp">
	<span class="widget-title"><?php echo lang('usercp_menu_title'); ?></span>
	<div style="padding:20px 0px;">
		<form class="lk-form">
			<?php templateBuildUsercp(); ?>
		</form>
		<p style="display: flex; justify-content: center; align-items: center; margin:15px 0px; "><a href="<?php echo __BASE_URL__; ?>logout" class="button-login">Log Out</a></p>
	</div>
</div>
<?php } ?>

<?php $charactersCountry = loadCache('character_country.cache'); ?>

<!-- WIDGET -->
<div class="widget">
	<span class="widget-title">
		Top Resets
	</span>
	<div class="panel-body">
	<?php
		$resetsRankingData = LoadCacheData('rankings_resets.cache');
		if(is_array($resetsRankingData)) {
			echo '<ul class="rank-list active">';
				foreach($resetsRankingData as $i => $row) {
					if($i < 1) continue;
					if($i > 10) break;
					echo '<li class="top-title">';
						echo '<span class="top-number">'.$i.'.</span><img src="'.getPlayerClassAvatar($row[1], false).'" alt="" style="width:20px;height:auto;margin-left:10px; -moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;-khtml-border-radius: 50%;"><img src="'.getCountryFlag($charactersCountry[$row[0]]).'" style="margin:0px 15px;"/> <span class="top-name">'.playerProfile($row[0]).'</span> <span class="top-lvl">'.number_format($row[3]).'<sup style="color:red;">'.number_format($row[2]).'</sup></span>';
					echo '</li>';
				}
			echo '</ul>';
		}
	?>
	</div>
</div><!-- widget -->

<!-- TOP MASTER LEVEL -->
<div class="widget" style="display:none;">
	<span class="widget-title">
		<?php echo lang('rankings_txt_22'); ?>
	</span>
	<div class="panel-body">
	<?php
		$masterLevelRankingData = LoadCacheData('rankings_master.cache');
		if(is_array($masterLevelRankingData)) {
			echo '<ul class="rank-list active">';
				foreach($masterLevelRankingData as $i => $row) {
					if($i < 1) continue;
					if($i > 5) break;
					echo '<li class="top-title">';
						echo '<span class="top-number">'.$i.'.</span><img src="'.getPlayerClassAvatar($row[2], false).'" alt="" style="width:20px;height:auto;margin-left:10px; -moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;-khtml-border-radius: 50%;"><img src="'.__BASE_URL__.'img/flags/default.gif" style="margin:0px 15px;"/> <span class="top-name">'.playerProfile($row[0]).'</span> <span class="top-lvl">'.number_format($row[3]).'<sup style="color:red;">'.number_format($row[1]).'</sup></span>';
					echo '</li>';
				}
			echo '</ul>';
		}
	?>
	</div>
</div><!-- widget -->


<!-- FACEBOOK -->
<div class="widget">
	<span class="widget-title">
		Facebook
	</span>
	<div class="panel-body">
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMUE.WebEngine&amp;tabs=timeline&amp;width=235&amp;height=400&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=false" width="235" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
	</div>
</div><!-- widget -->