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

if (!defined('ICMS_ROOT_PATH')){ exit(); }

if(defined("NEWBB_FUNCTIONS_INI")) return; define("NEWBB_FUNCTIONS_INI",1);

include_once(ICMS_ROOT_PATH."/modules/".basename(  dirname(  dirname( __FILE__ ) ) )."/class/art/functions.php");

function iforum_load_object()
{
	return load_object();
}

function iforum_message( $message )
{
	global $xoopsModuleConfig;
	if(!empty($xoopsModuleConfig["do_debug"])){
		if(is_array($message) || is_object($message)){
			echo "<div><pre>";print_r($message);echo "</pre></div>";
		}else{
			echo "<div>$message</div>";
		}
	}
	return;
}

function &iforum_load_config()
{
	static $moduleConfig;
	if(isset($moduleConfig)){
		return $moduleConfig;
	}
	
    if(isset($GLOBALS["xoopsModule"]) && is_object($GLOBALS["xoopsModule"]) && $GLOBALS["xoopsModule"]->getVar("dirname", "n") == basename(  dirname(  dirname( __FILE__ ) ) )){
	    if(!empty($GLOBALS["xoopsModuleConfig"])) {
		    $moduleConfig =& $GLOBALS["xoopsModuleConfig"];
	    }else{
		    return null;
	    }
    }else{
		$module_handler = &xoops_gethandler('module');
		$module = $module_handler->getByDirname(basename(  dirname(  dirname( __FILE__ ) ) ));
	
	    $config_handler = &xoops_gethandler('config');
	    $criteria = new CriteriaCompo(new Criteria('conf_modid', $module->getVar('mid')));
	    $configs =& $config_handler->getConfigs($criteria);
	    foreach(array_keys($configs) as $i){
		    $moduleConfig[$configs[$i]->getVar('conf_name')] = $configs[$i]->getConfValueForOutput();
	    }
	    unset($configs);
    }
	if($customConfig = @include(ICMS_ROOT_PATH."/modules/".basename( dirname( dirname( __FILE__ ) ) )."/include/plugin.php")){
		$moduleConfig = array_merge($moduleConfig, $customConfig);
	}
    return $moduleConfig;
}

function getConfigForBlock()
{
	return iforum_load_config();
	
	static $iforumConfig;
	if(isset($iforumConfig)){
		return $iforumConfig;
	}
	
    if(is_object($GLOBALS["xoopsModule"]) && $GLOBALS["xoopsModule"]->getVar("dirname") == basename(  dirname(  dirname( __FILE__ ) ) )){
	    $iforumConfig =& $GLOBALS["xoopsModuleConfig"];
    }else{
		$module_handler =& xoops_gethandler('module');
		$iforum = $module_handler->getByDirname(basename(  dirname(  dirname( __FILE__ ) ) ));
	
	    $config_handler =& xoops_gethandler('config');
	    $criteria = new CriteriaCompo(new Criteria('conf_modid', $iforum->getVar('mid')));
	    $criteria->add(new Criteria('conf_name', "('show_realname', 'subject_prefix', 'allow_require_reply')", "IN"));
	    $configs =& $config_handler->getConfigs($criteria);
	    foreach(array_keys($configs) as $i){
		    $iforumConfig[$configs[$i]->getVar('conf_name')] = $configs[$i]->getConfValueForOutput();
	    }
	    unset($iforum, $configs);
    }
    return $iforumConfig;
}


// Backword compatible
function iforum_load_lang_file( $filename, $module = '', $default = 'english' )
{
	if(function_exists("xoops_load_lang_file")){
		return xoops_load_lang_file($filename, $module, $default);
	}
	
	$lang = $GLOBALS['xoopsConfig']['language'];
	$path = ICMS_ROOT_PATH . ( empty($module) ? '/' : "/modules/$module/" ) . 'language';
	if ( !( $ret = @include_once( "$path/$lang/$filename.php" ) ) ) {
		$ret = @include_once( "$path/$default/$filename.php" );
	}
	return $ret;
}

// Adapted from PMA_getIp() [phpmyadmin project]
function iforum_getIP($asString = false)
{
	return mod_getIP($asString);
}

?>