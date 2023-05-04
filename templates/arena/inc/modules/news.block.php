<div class="newsBlock flex">
	<div class="gameBlock">
		<a href="<?php echo __BASE_URL__; ?>rankings/" class="gameBlock-info"><span>Game</span> Rankings</a>
		<a href="<?php echo __BASE_URL__; ?>" class="gameBlock-guide"><span>Game</span> Guides</a>
	</div>
	<div class="noticeaBlock">
		<div class="newsTitle">
			<h3>Latest News
				<span class="pull-right">
					<span style="display:inline-block;" class="newsMoreButton-plus" onclick="window.location.href='<?php echo __BASE_URL__; ?>news/';">
						<span></span>
						<span></span>
						<i></i>
					</span>
				</span>
			</h3>
			
		</div>
		<?php
		$cachedNews = loadCache('news.cache');
		if(is_array($cachedNews)) {
			if(count($cachedNews) > 5) $cachedNews = array_slice($cachedNews, 0, 5);
			foreach($cachedNews as $newsArticle) {
				echo '<div class="news">';
					echo '<a href="'.__BASE_URL__.'news/'.$newsArticle['news_id'].'"><span>[NEWS]</span> '.base64_decode($newsArticle['news_title']).'</a> <span class="date">'.date("Y.m.d", $newsArticle['news_date']).'</span>';
				echo '</div>';
			}
		}
		?>
	</div>
	<div class="updatesBlock">
		
		<!-- ONLINE PLAYERS -->
		<div class="newsTitle text-center">
			<h3><?php echo lang('sidebar_srvinfo_txt_5'); ?></h3>
		</div>
		<div class="realm-status">
			<div class="radial-stat">
				<div class="circle-online">
					<div class="serverInfo">
						<span class="serverInfo_online"><?php echo number_format($onlinePlayers); ?></span>
					</div>
					<div class="circlestat" data-dimension="145" data-width="10" data-fontsize="10" data-percent="<?php echo $onlinePlayersPercent; ?>" data-fgcolor="#97e158" data-bgcolor="rgba(0, 0, 0, 0.6)"></div>
				</div>
			</div>
		</div>
		
		<!-- SERVER TIME -->
		<div class="serverTimeBlock">
			<div class="col-xs-4 text-left">
				<?php echo lang('server_time'); ?>:
			</div>
			<div class="col-xs-8 text-right">
				<time id="tServerTime">&nbsp;</time> <span id="tServerDate">&nbsp;</span>
			</div>
			
			<div class="col-xs-4 text-left">
				<?php echo lang('user_time'); ?>:
			</div>
			<div class="col-xs-8 text-right">
				<time id="tLocalTime">&nbsp;</time> <span id="tLocalDate">&nbsp;</span>
			</div>
		</div>
		
	</div>
</div>