<?php
/**
 * WebEngine CMS
 * https://webenginecms.org/
 * 
 * @version 1.2.1
 * @author Lautaro Angelico <http://lautaroangelico.com/>
 * @copyright (c) 2013-2020 Lautaro Angelico, All Rights Reserved
 * 
 * Licensed under the MIT license
 * http://opensource.org/licenses/MIT
 */

function templateCastleSiegeWidget() {
	$castleSiege = new CastleSiege();
	if(!$castleSiege->showWidget()) return;
	$siegeData = $castleSiege->siegeData();
	if(!is_array($siegeData)) return;
	
	if($siegeData['castle_data'][_CLMN_MCD_OCCUPY_] == 1) {
		$guildOwner = guildProfile($siegeData['castle_data'][_CLMN_MCD_GUILD_OWNER_]);
		$guildOwnerMark = $siegeData['castle_owner_alliance'][0][_CLMN_GUILD_LOGO_];
		$guildMaster = playerProfile($siegeData['castle_owner_alliance'][0][_CLMN_GUILD_MASTER_]);
	} else {
		$guildOwner = '-';
		$guildOwnerMark = '1111111111111111111111111114411111144111111111111111111111111111';
		$guildMaster = '-';
	}
	
	echo '<div class="eventBlock">';
		echo '<h1>'.lang('castlesiege_widget_title').'</h1>';
		echo '<div class="event">';
			echo '<div class="col-xs-4 text-center">';
				echo returnGuildLogo($guildOwnerMark, 170);
			echo '</div>';
			echo '<div class="col-xs-4">';
				echo '<div class="col-xs-12" style="padding:30px 0px;">';
					echo lang('castlesiege_txt_2') . '<br />';
					echo '<span style="font-size:40px;">'.$guildOwner.'</span>';
				echo '</div>';
				echo '<div class="col-xs-12" style="padding:30px 0px;">';
					echo lang('castlesiege_txt_12') . '<br />';
					echo '<span style="font-size:40px;">'.$guildMaster.'</span>';
				echo '</div>';
			echo '</div>';
			echo '<div class="col-xs-4">';
				echo '<div class="col-xs-12" style="padding:30px 0px;">';
					echo lang('castlesiege_txt_21') . '<br />';
					echo '<span style="font-size:40px;">'.$siegeData['current_stage']['title'].'</span>';
				echo '</div>';
				echo '<div class="col-xs-12" style="padding:30px 0px;">';
					echo lang('castlesiege_txt_1') . '<br />';
					echo '<span style="font-size:40px;">'.$siegeData['warfare_stage_countdown'].'</span>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
}