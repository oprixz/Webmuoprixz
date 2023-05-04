<?php
/**
 * WebEngine CMS
 * https://webenginecms.org/
 * 
 * @version 1.2.2
 * @author Lautaro Angelico <http://lautaroangelico.com/>
 * @copyright (c) 2013-2020 Lautaro Angelico, All Rights Reserved
 * 
 * Licensed under the MIT license
 * http://opensource.org/licenses/MIT
 */

if(!defined('access') or !access) die();
include('inc/template.functions.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
		<title><?php $handler->websiteTitle(); ?></title>
		<meta name="generator" content="WebEngine <?php echo __WEBENGINE_VERSION__; ?>"/>
		<meta name="author" content="Lautaro Angelico"/>
		<meta name="description" content="<?php config('website_meta_keywords'); ?>"/>
		<meta name="keywords" content="<?php config('website_meta_keywords'); ?>"/>
		<link rel="shortcut icon" href="<?php echo __PATH_TEMPLATE__; ?>favicon.ico"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<link href="<?php echo __PATH_TEMPLATE_CSS__; ?>style.css" rel="stylesheet">
		<link href="<?php echo __PATH_TEMPLATE_CSS__; ?>profiles.css" rel="stylesheet">
		<link href="<?php echo __PATH_TEMPLATE_CSS__; ?>webengine.css" rel="stylesheet">
		<link href="<?php echo __PATH_TEMPLATE_CSS__; ?>castle-siege.css" rel="stylesheet">
		<script>
			var baseUrl = '<?php echo __BASE_URL__; ?>';
		</script>
	</head>
	<body>
		<div class="menu-top">
			<?php templateBuildNavbar(); ?>
		</div>
		<div class="header">
			<div class="sparks sparks-1">
			</div>
			<div class="sparks sparks-2">
			</div>
			<div class="sparks sparks-3">
			</div>
			<a href="<?php echo __BASE_URL__; ?>" class="logo"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>logo.png" /></a>
			<?php templateDisplayCSPanel(); ?>
			<article id="gGST_Wrap">
				<div class="gGST_BoxOn" id="gstYourTime">
					<span><?php echo lang('user_time'); ?></span><span style="color:#fff;width:40px;" id="tLocalTime"></span><span style="color:#fff;width:90px;" id="tLocalDate"></span>
				</div>
				<div class="gGST_BoxOff">
					<span><?php echo lang('server_time'); ?></span><span style="color:#d7c1ff;width:40px;" id="tServerTime"></span><span style="color:#d7c1ff;width:90px;" id="tServerDate"></span>
				</div>
			</article>
		</div>
		<div class="container_web">
			<aside class="left-sidebar">
				<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/sidebar.left.php'); ?>
			</aside>
			<main class="content-block">
				<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/slider.php'); ?>
				<div class="main_web">
				<?php $handler->loadModule($_REQUEST['page'],$_REQUEST['subpage']); ?>
				</div>
			</main>
			<aside class="left-sidebar">
				<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/sidebar.right.php'); ?>
			</aside>
		</div>
		<footer class="footer">
			<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/footer.php'); ?>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>global.js"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>events.js"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>main.js"></script>
	</body>
</html>