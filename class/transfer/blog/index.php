<?php
/**
* iForum - a bulletin Board (Forum) for ImpressCMS
*
* Based upon CBB 3.08
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		http://xoopsforge.com The XOOPS FORGE Project
* @copyright		http://xoops.org.cn The XOOPS CHINESE Project
* @copyright		XOOPS_copyrights.txt
* @copyright		readme.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license			GNU General Public License (GPL)
*					a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		CBB - XOOPS Community Bulletin Board
* @since			3.08
* @author		phppp
* ----------------------------------------------------------------------------------------------------------
* 				iForum - a bulletin Board (Forum) for ImpressCMS
* @since			1.00
* @author		modified by stranger
* @version		$Id$
*/

function transfer_blog(&$data)
{
	global $xoopsModule, $xoopsConfig, $xoopsUser, $xoopsModuleConfig;
	global $xoopsLogger, $xoopsOption, $xoopsTpl, $xoopsblock;

	$_config = require(dirname(__FILE__)."/config.php");
	
	$hiddens["art_author"] = $data["author"];
	$hiddens["art_title"] = $data["title"];
	$hiddens["art_source"] = $data["url"];
	$hiddens["text"] = $data["content"];
	
	include ICMS_ROOT_PATH."/header.php";
	xoops_confirm($hiddens, ICMS_URL."/modules/".$_config["module"]."/action.article.php", $_config["title"]);
	$GLOBALS["xoopsOption"]['output_type'] = "plain";
	include ICMS_ROOT_PATH."/footer.php";
	exit();
}
?>