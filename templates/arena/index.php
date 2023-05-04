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

if(!defined('access') or !access) die();
include('inc/template.functions.php');

$serverInfoCache = LoadCacheData('server_info.cache');
if(is_array($serverInfoCache)) {
	$srvInfo = explode("|", $serverInfoCache[1][0]);
}

$maxOnline = config('maximum_online', true);
$onlinePlayers = check_value($srvInfo[3]) ? $srvInfo[3] : 0;
$onlinePlayersPercent = check_value($maxOnline) ? $onlinePlayers*100/$maxOnline : 0;

// Override default module to "home"
if(!check_value($_REQUEST['page'])) {
	$_REQUEST['page'] = 'home';
}

// Load the template index
if($_REQUEST['page'] == 'home') {
	include_once(__PATH_TEMPLATE_ROOT__ . 'index.home.php');
} else {
	include_once(__PATH_TEMPLATE_ROOT__ . 'index.default.php');
}