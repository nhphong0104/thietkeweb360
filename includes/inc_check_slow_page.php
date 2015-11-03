<?
//kiem tra xem thoi gian load page la bao lau
$time_end_load_page 	= microtime_float();
$time_load_page 		=	$time_end_load_page - $time_start_load_page;

if(isset($_SESSION["logged"])){
	echo '<div style="left: 0; bottom: 0px; position: fixed; background: #4285F4; color:#FFFFFF; font-size: 12px; padding: 3px 6px; text-align: center;">Generate time = ' . format_number($time_load_page, 10) . " s, Memory usage = " . format_number(memory_get_usage() / 1024, 0) . ' KB<div>';
} 
?>