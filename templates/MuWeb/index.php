<?php

if(!defined('access') or !access) die();
include('inc/template.functions.php');

$serverInfoCache = LoadCacheData('server_info.cache');
if(is_array($serverInfoCache)) {
	$srvInfo = explode("|", $serverInfoCache[1][0]);
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo __PATH_TEMPLATE_CSS__; ?>banner-styles.css?v=fantwOh2" />
    <link rel="stylesheet" type="text/css" href="<?php echo __PATH_TEMPLATE_CSS__; ?>iconochive.css?v=qtvMKcIJ" />
    <!-- End Wayback Rewrite JS Include -->

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title><?php $handler->websiteTitle(); ?></title>
    <meta property="og:title" content="<?php $handler->websiteTitle(); ?>" />
    <meta name="description" content="<?php config('website_meta_description'); ?>"/>
	<meta name="keywords" content="<?php config('website_meta_keywords'); ?>"/>
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<?php config('website_meta_description'); ?>" />
	<meta property="og:image" content="<?php echo __PATH_IMG__; ?>webengine.jpg" />
	<meta property="og:url" content="<?php echo __BASE_URL__; ?>" />
	<meta property="og:site_name" content="<?php $handler->websiteTitle(); ?>" />
    <style type="text/css">
        body {
            background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>bg_a.png);
            background-repeat: no-repeat;
            background-position: center;
            background-position: top;
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            background-color: #610000;
        }

        
    </style>
    <link href="<?php echo __PATH_TEMPLATE_CSS__; ?>global_style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo __PATH_TEMPLATE_CSS__; ?>sortabletable.css" rel="stylesheet" type="text/css">
    <link rel="alternate" type="application/rss+xml" title="Mu Online Server" href="rss_news.php">
    <link rel="SHORTCUT ICON" href="<?php echo __PATH_TEMPLATE_IMG__; ?>favicon.ico">
    <script>
			var baseUrl = '<?php echo __BASE_URL__; ?>';
		</script>

    </div>
    <script type="text/javascript">
        Drag.init(document.getElementById("handle"), document.getElementById("root"));
        if (readCookie("hs_wow_vote") != 1) {
            document.getElementById('root').style.visibility = "visible";
        }
    </script>
    

</head>

<body>
    <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="780" height="103" style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>h_t.jpg);">
                <table width="780" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="86" height="43" rowspan="2">&nbsp;</td>
                        <td width="434" height="19">&nbsp;</td>
                        <td width="260" rowspan="2">
                            <table width="260" border="0" align="right" cellpadding="0" cellspacing="2" style="background: #606060;border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                                <tr>
                                    <td width="25" rowspan="2">&nbsp;</td>
                                    <td width="229" height="24" class="text_black">
                                    <?php if(config('language_switch_active',true)) { ?>
                                        <div align="right"><em><b>Lenguaje del Sitio</b></em><br>
                                            <ul class="webengine-language-switcher">
                                                <li><a href="<?php echo __BASE_URL__ . 'language/switch/to/en'; ?>" title="English"><img src="<?php echo getCountryFlag('US'); ?>" /> EN</a></li>
                                                <li><a href="<?php echo __BASE_URL__ . 'language/switch/to/es'; ?>" title="Español"><img src="<?php echo getCountryFlag('AR'); ?>" /> ES</a></li>
                                                <li><a href="<?php echo __BASE_URL__ . 'language/switch/to/ph'; ?>" title="Filipino"><img src="<?php echo getCountryFlag('PH'); ?>" /> PH</a></li>
                                                <li><a href="<?php echo __BASE_URL__ . 'language/switch/to/pt'; ?>" title="Português"><img src="<?php echo getCountryFlag('BR'); ?>" /> BR</a></li>
                                                <li><a href="<?php echo __BASE_URL__ . 'language/switch/to/ro'; ?>" title="Romanian"><img src="<?php echo getCountryFlag('RO'); ?>" /> RO</a></li>
                                                <li><a href="<?php echo __BASE_URL__ . 'language/switch/to/cn'; ?>" title="Simplified Chinese"><img src="<?php echo getCountryFlag('CN'); ?>" /> CN</a></li>
                                                <li><a href="<?php echo __BASE_URL__ . 'language/switch/to/ru'; ?>" title="Russian"><img src="<?php echo getCountryFlag('RU'); ?>" /> RU</a></li>
                                                <li><a href="<?php echo __BASE_URL__ . 'language/switch/to/lt'; ?>" title="Lithuanian"><img src="<?php echo getCountryFlag('LT'); ?>" /> LT</a></li>
                                            </ul>
                                        
                                    </div>
                                    <?php } ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td height="52">
                            <table width="331" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td valign="top" class="text_little"><b><font color="#008000">Bienvenidos a <?=config('server_name',true);?></font></b><span class="little_link"><a href="#" onclick="sub_page('MuPlata S2-Story.html');"></a></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="176" valign="top" bgcolor="#000000">
                <table width="176" border="0" cellpadding="0" cellspacing="0" style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>top_l_bg.png);">
                    <tr>
                        <td><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>top_l_bg.png" width="35" height="1" alt=""></td>
                    </tr>
                </table>
                <table width="174" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="174" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="176" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="2"></td>
                        <td width="174">
                            <table width="174" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td height="30" style="background: url(<?php echo __PATH_TEMPLATE_IMG__; ?>red_menu_top.png); background-repeat: no-repeat;">
                                        <div align="center" class="menu_title">
                                            <div align="right">Panel de Usuario</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>red_menu_middle.png);">
                                        <table width="167" border="0" align="right" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td height="2"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>red_menu_space.png" width="167" height="2" alt=""></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>red_menu_middle.png);" class="space">
                                       <?php
                                       if(!isLoggedIn()){
                                       echo '<form name="account_l" method="post" action="'.__BASE_URL__.'login"> 
                                            <table width="174" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td width="18"></td>
                                                    <td width="156" class="text"><b><u>Usuario:</u></b></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td><input type="text" class="field" id="loginBox1" name="webengineLogin_user" required></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td class="text"><b><u>Contraseña:</u></b></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td><input type="password" class="field" id="loginBox2" name="webengineLogin_pwd" required></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="space">
                                                        <div id="pass_content" align="left"><button type="submit" name="webengineLogin_submit" value="submit" class="btn btn-primary">Login</button></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                            </table>
                                        </form>';
                                       }else{
                                        templateBuildUsercp();

                                        echo '<a style="position: relative;left: 20px;" href="'.__BASE_URL__.'logout">Salir</a>';
                                       }
                                        ?>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>red_menu_bottom.png" width="174" height="17" alt=""></td>
                                    </tr>
                            </table>
                            <table width="174" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                </tr>
                            </table>
                            <table width="174" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td height="30" style="background: url(<?php echo __PATH_TEMPLATE_IMG__; ?>gray_menu_top.png); background-repeat: no-repeat;">
                                        <div align="center" class="menu_title">
                                            <div align="right">Menu Principal</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>gray_menu_middle.png);">
                                        <table width="167" border="0" align="right" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td height="2" colspan="2"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>gray_menu_space.png" width="167" height="2" alt=""></td>
                                            </tr>
                                            <?php templateBuildNavbar(); ?>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>gray_menu_bottom.png" width="174" height="17" alt=""></td>
                                </tr>

                                

                            </table>
                            <?php 
                            if(is_array($srvInfo)) {
                            echo '<div class="stats-sv">
                                    <p><b>Cuentas:</b> '.number_format($srvInfo[0],'0','','.').' <br>
                                    <b>Personajes:</b> '.number_format($srvInfo[1],'0','','.').' <br>
                                    <b>Clanes:</b>     '.number_format($srvInfo[2],'0','','.').' <br>
                                    <b>Jugando:</b>    <font color=green>'.number_format($srvInfo[3],'0','','.').' </font></p>
                                </div>';
                            }
                            ?>
                            <table align="center" width="155">
                                <tr>
                                    <td width="9"></td>
                                    <td><a href="#"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>g_i.png" border="0" width="146" height="101" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td width="9"></td>
                                    <td><a href="#"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>p_i.png" border="0" width="146" height="101" alt=""></a></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="9"></td>
                                    <td><a href="#"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>r_i.png" border="0" width="146" height="101" alt=""></a></td>
                                </tr>
                            </table><br></td>
                        </tr>
                </table>
            </td>
            <td width="604" valign="top" bgcolor="#1F1F1F">
                <table width="604" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>c_d.png);"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>c_d.png" width="35" height="8" alt=""></td>
                    </tr>
                </table>
                <table width="604" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>i_header.jpg" width="604" height="133" alt=""></td>
                    </tr>
                </table>
                <table width="604" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>c_d.png);"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>c_d.png" width="35" height="8" alt=""></td>
                    </tr>
                </table>
                <table width="604" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="26" style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>menu_bg.png);">
                            <div align="left">
                                <table width="384" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="120">
                                            <div align="center" class="menu_link"><a href="<?php echo __BASE_URL__;?>news";"><b>Noticias</b></a></div>
                                        </td>
                                        <td width="2"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>menu_space.png" width="2" height="26" alt=""></td>
                                        <td width="120">
                                            <div align="center" class="menu_link"><a href="<?php echo __BASE_URL__;?>downloads"><b>Descargas</b></a></div>
                                        </td>
                                        <td width="2"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>menu_space.png" width="2" height="26" alt=""></td>
                                        <td width="120">
                                            <div align="center" class="menu_link"><a href="#"><b>Galeria</b></a></div>
                                        </td>
                                        <td width="2"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>menu_space.png" width="2" height="26" alt=""></td>
                                        <td width="120">
                                            <div align="center" class="menu_link"><a href="<?php echo __BASE_URL__;?>rankings"><b>Rankings</b></a></div>
                                        </td>
                                        <td width="2"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>menu_space.png" width="2" height="26" alt=""></td>
                                        <td width="120">
                                            <div align="center" class="menu_link"><a href="<?php echo __BASE_URL__;?>register"><b>Registro</b></a></div>
                                        </td>
                                        <td width="2"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>menu_space.png" width="2" height="26" alt=""></td>
                                        <td width="120">
                                            <div align="center" class="menu_link"><a href="#"><b>Foro</b></a></div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
                <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="padding-top:10px; padding-bottom:10px;">
                    <tr>
                        <td align="center">

                            <style type="text/css">
                                .style1 {
                                    color: #FF0000;
                                    font-weight: bold;
                                }

                               
                            </style>
                        </td>
                    </tr>
                </table>
                <table width="604" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="32">&nbsp;</td>
                        <td width="572" height="25" style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>title_content.jpg);">
                            <div align="left" class="content_title" style="padding-left: 10px;"><?=config('server_name',true);?> :: <span id="pageTitle"></span></div>
                        </td>
                    </tr>
                </table>
                <table width="604" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="48">&nbsp;</td>
                        <td width="556" valign="top" bgcolor="#333333"><br>
                            <div align="center" id="sub_page_content">
                                <div align="center" class="normal_text">
                                    <?php $handler->loadModule($_REQUEST['page'],$_REQUEST['subpage']); ?>
                                </div>
                                <br></td>
                    </tr>
                </table>
                <table width="604" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="48" height="5"></td>
                        <td height="5" style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>c_d.png);"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>c_d.png" width="35" height="5" alt=""></td>
                    </tr>
                </table><br><br>
                <table width="604" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="302" valign="top">
                            <table width="270" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td height="25" style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>rss_content.jpg);">
                                        <div class="content_title" align="right">Top 5 Clanes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="265" border="0" cellspacing="0" cellpadding="0" align="center">
                                        <?php 
                                        // Top Guild
                                        $GuildRankingData = LoadCacheData('rankings_guilds.cache');
                                        $topGuildLimit = 5;
                                        if(is_array($GuildRankingData)) {
                                            $topGuild = array_slice($GuildRankingData, 0, $topGuildLimit+1);

                                            $i = 1;
                                            foreach($topGuild as $key => $row) {
                                                if($key == 0) continue;
                                                echo '<tr>';
                                                    echo '<td width="31" height="11" align="right"><img src="'.__PATH_TEMPLATE_IMG__.'t_'.$i.'.gif" width="11" height="11" alt=""></td>';
                                                    echo '<td align="left">&nbsp;'.guildProfile($row[0]).'<span class="rankings_text"> :: <span class="rankings_text_reset">'.returnGuildLogo($row[3], 16).'</span> :: <em>'.number_format($row[2],'0','','.').' de score</em></span>';
                                                    echo '</td>';
                                                echo '<tr>';
                                                $i++;
                                            }
                                        }
                                        ?>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="302" valign="top">
                            <table width="280" border="0" cellspacing="0" cellpadding="0" align="right">
                                <tr>
                                    <td colspan="2" height="25" style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>top_content.jpg);">
                                        <div class="content_title" align="right">Top 5 Personajes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                    </td>
                                </tr>
                                <?php 

                                // Top Level
                                $levelRankingData = LoadCacheData('rankings_resets.cache');
                                $topLevelLimit = 5;
                                if(is_array($levelRankingData)) {
                                    $topLevel = array_slice($levelRankingData, 0, $topLevelLimit+1);

                                    $i = 1;
                                    foreach($topLevel as $key => $row) {
                                        if($key == 0) continue;
                                        echo '<tr>';
                                            echo '<td width="31" height="11" align="right"><img src="'.__PATH_TEMPLATE_IMG__.'t_'.$i.'.gif" width="11" height="11" alt=""></td>';
                                            echo '<td align="left">&nbsp;'.playerProfile($row[0]).'<span class="rankings_text"> :: '.number_format($row[3]).'[<span class="rankings_text_reset">'.number_format($row[2],'0','','.').'</span>] :: <em>'.getPlayerClass($row[1]).'</em></span>';
                                            echo '</td>';
                                        echo '<tr>';
                                        $i++;
                                    }
                                }
                                ?>
                            </table>
                        </td>
                </table> <br> </tr>
                </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="780">
        <tbody>
            <tr>
                <td bgcolor="#000000" valign="bottom" width="176">
                    <div style="font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 9px; color: rgb(255, 255, 255);" align="center">

                    </div>
                    <div align="left"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>right_c.png" alt="" height="14" width="13"></div>
                </td>
                <td style="background-image: url(<?php echo __PATH_TEMPLATE_IMG__; ?>b_bg.png);" class="little_link" align="center" height="58" width="589"><span style="font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 9px; color: rgb(255, 255, 255);"><b><?php echo langf('footer_copyright', array(config('server_name', true), date("Y"))); ?><br />
				<?php echo lang('footer_webzen_copyright'); ?></b></span><br>
                <?php $handler->webenginePowered(); ?></td>
                <td width="15">
                    <div align="right"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>right_c_b.jpg" alt="" height="58" width="15"></div>
                </td>
            </tr>
        </tbody>
    </table>
    <script src="<?php echo __PATH_TEMPLATE_JS__; ?>jquery/jquery.min.js"></script>
    <script>
	$(document).ready(function() {
		if($('.page-title').length) {
			$('.page-title').hide();
			$('#pageTitle').html(''+$('.page-title').text()+'');
		}
	});
	</script>
                        </body>
                        </html>