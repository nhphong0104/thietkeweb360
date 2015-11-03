<?
error_reporting(1);
@session_start();
date_default_timezone_set('Asia/Saigon'); // Set default timezone

if(checkServerOrLocal()){
	if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'],'gzip')){ 
		ob_start('ob_gzhandler');
		ob_start('callback');
	}else{
		ob_start('callback');
	}
}

// Config
$con_min_css_js 			= 1; // Cau hinh chay js theo min hay khong min - 0: khong dung ; 1: Co dung
$con_set_cache				= 0; // Set cache tung template trong trang - 0: khong dung ; 1: Co dung
$con_set_cache_header		= 0; // Dung cache Html theo header - 0: khong dung ; 1: Co dung 
$con_set_fire_wall			= 0; // Dung Firewall - 0: khong dung ; 1: Co dung
$con_version_up				= '20141031'; // Version tranh cache

/**
 * Khai bao cau hinh CSS va JS
 */
include("inc_config_css_js.php");

/**
 * Khai bao cac bien dung chung - khong lay tu sql
 */
include("inc_config_variable.php");

/**
 * Khai bao cac bien lay tu database
 */
include("inc_config_variable_sql.php");

/**
 * Quan ly phan header cua web
 * Thay doi title, description, keyword ...
 * Redirect ban ghi theo ID neu nhu ten ban ghi khong dung
 */
include("inc_config_header.php");