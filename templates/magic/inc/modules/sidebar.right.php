<a href="<?php echo __BASE_URL__; ?>downloads/" class="download-button"><span>Download</span></a>

<!-- SERVER STATUS -->
<?php
$srvInfoCache = LoadCacheData('server_info.cache');
$serverMaxOnline = 100;
$onlinePlayers = 0;
if(is_array($srvInfoCache)) {
	$srvInfo = explode("|", $srvInfoCache[1][0]);
	$onlinePlayers = $srvInfo[3];
	$onlinePercent = round(($onlinePlayers*100)/$serverMaxOnline);
	if($onlinePercent > 100) $onlinePercent = 100;
}
?>

<div class="status_block">
	<div class="status_block-block online">
		<div class="status_block-progress"><span style="width: <?php echo $onlinePercent; ?>%;"></span></div>
		<div class="status_block-realmonline flex-s"><?php echo config('server_name', true); ?> <span class="text-online">Online: <?php echo number_format($onlinePlayers); ?></span></div>
	</div>
</div>

<?php if(is_array($srvInfoCache)) { ?>
<!-- SERVER INFO -->
<div class="widget">
	<span class="widget-title"><?php echo lang('sidebar_srvinfo_txt_1'); ?></span>
	<div>
		<ul class="rank-list active">
			<li><span class="info-span-l">Version</span><span class="info-span-r">S6</span></li>
			<li><span class="info-span-l">Experience</span><span class="info-span-r">1000x</span></li>
			<li><span class="info-span-l">Master Exp</span><span class="info-span-r">500x</span></li>
			<li><span class="info-span-l">Majestic Exp</span><span class="info-span-r">500x</span></li>
			<li><span class="info-span-l">Drop</span><span class="info-span-r">60%</span></li>
			<li><span class="info-span-l"><?php echo lang('sidebar_srvinfo_txt_2'); ?></span><span class="info-span-r"><?php echo number_format($srvInfo[0]); ?></span></li>
			<li><span class="info-span-l"><?php echo lang('sidebar_srvinfo_txt_3'); ?></span><span class="info-span-r"><?php echo number_format($srvInfo[1]); ?></span></li>
			<li><span class="info-span-l"><?php echo lang('sidebar_srvinfo_txt_4'); ?></span><span class="info-span-r"><?php echo number_format($srvInfo[2]); ?></span></li>
		</ul>
	</div>
</div>
<?php } ?>

<!-- EVENTS -->
<div class="widget">
	<span class="widget-title">
		Events
	</span>
	<div class="panel-body">
		<ul class="table table-condensed">
			<li>
				<div style="width:100%;">
					<span id="bloodcastle_name"></span>
					<span style="float:right; display:block;" id="bloodcastle_next"></span><br />
					<span class="smalltext" style="color: #ffb86b;">Starts In</span>
					<span style="float:right; display:block; color:#abff29;" class="smalltext" id="bloodcastle"></span>
				</div>
			</li>
			<li>
				<div style="width:100%;">
					<span id="devilsquare_name"></span>
					<span style="float:right; display:block;" id="devilsquare_next"></span><br />
					<span class="smalltext" style="color: #ffb86b;">Starts In</span>
					<span style="float:right; display:block; color:#abff29;" class="smalltext" id="devilsquare"></span>
				</div>
			</li>
			<li>
				<div style="width:100%;">
					<span id="chaoscastle_name"></span>
					<span style="float:right; display:block;" id="chaoscastle_next"></span><br />
					<span class="smalltext" style="color: #ffb86b;">Starts In</span>
					<span style="float:right; display:block; color:#abff29;" class="smalltext" id="chaoscastle"></span>
				</div>
			</li>
			<li>
				<div style="width:100%;">
					<span id="goldeninvasion_name"></span>
					<span style="float:right; display:block;" id="goldeninvasion_next"></span><br />
					<span class="smalltext" style="color: #ffb86b;">Starts In</span>
					<span style="float:right; display:block; color:#abff29;" class="smalltext" id="goldeninvasion"></span>
				</div>
			</li>
		</ul>
	</div>
</div><!-- widget -->


<!-- DISCORD -->
<div class="widget">
	<span class="widget-title">
		Discord
	</span>
	<div class="panel-body">
		<iframe src="https://discordapp.com/widget?id=388831349848539146&theme=dark" width="235" height="500" allowtransparency="true" frameborder="0"></iframe>
	</div>
</div><!-- widget -->