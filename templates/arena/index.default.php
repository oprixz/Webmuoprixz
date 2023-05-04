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
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
		<title><?php $handler->websiteTitle(); ?></title>
		<meta name="generator" content="WebEngine <?php echo __WEBENGINE_VERSION__; ?>"/>
		<meta name="author" content="Lautaro Angelico"/>
		<meta name="description" content="<?php config('website_meta_description'); ?>"/>
		<meta name="keywords" content="<?php config('website_meta_keywords'); ?>"/>
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php $handler->websiteTitle(); ?>" />
		<meta property="og:description" content="<?php config('website_meta_description'); ?>" />
		<meta property="og:image" content="<?php echo __PATH_IMG__; ?>webengine.jpg" />
		<meta property="og:url" content="<?php echo __BASE_URL__; ?>" />
		<meta property="og:site_name" content="<?php $handler->websiteTitle(); ?>" />
		<link rel="shortcut icon" href="<?php echo __PATH_TEMPLATE__; ?>favicon.ico"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo __PATH_TEMPLATE_CSS__; ?>style.css" type="text/css"/>
		<link rel="stylesheet" href="<?php echo __PATH_TEMPLATE_CSS__; ?>override.css" type="text/css"/>
		<link rel="stylesheet" href="<?php echo __PATH_TEMPLATE_CSS__; ?>webengine.css" type="text/css"/>
		<link rel="stylesheet" href="<?php echo __PATH_TEMPLATE_CSS__; ?>profiles.css" type="text/css"/>
		<link rel="stylesheet" href="<?php echo __PATH_TEMPLATE_CSS__; ?>castle-siege.css" type="text/css"/>
		<link rel="stylesheet" href="<?php echo __PATH_TEMPLATE_CSS__; ?>swiper.min.css" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
		<script>
			var baseUrl = '<?php echo __BASE_URL__; ?>';
		</script>
	</head>
	<body>
		<!-- SIDE MENU -->
		<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/side.menu.php'); ?>
		
		<div class="container container-top">
			<!-- NAVBAR -->
			<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/navbar.php'); ?>
			
			<!-- CONTENT -->
			<main class="content">
				<div class="contentBlock">
					<?php $handler->loadModule($_REQUEST['page'],$_REQUEST['subpage']); ?>
				</div>
			</main>
		</div>
		
		<!-- SOCIAL BLOCK -->
		<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/social.block.php'); ?>
		
		<!-- FOOTER -->
		<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/footer.php'); ?>
		
		<!-- MODALS -->
		<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/events.modal.php'); ?>
		<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/language.modal.php'); ?>
		<div id="overlay"></div>
		
		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>webengine.js"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>events.js"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>global.js"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>swiper.min.js"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>main.js"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>slick.min.js"></script>
		<script>				
			$('.center').slick({
				infinite: true,
				centerMode: true,
				centerPadding: '50px 30px',
				slidesToShow: 3,
				slidesToScroll: 3
			});
			
			$(".drop-button").click(function(){
				$(this).toggleClass("active");
				$('.'+$(this).attr('data-tab')).slideToggle();
			});
		</script>
	</body>
</html>