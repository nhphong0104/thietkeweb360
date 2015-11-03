<?
$module_id = 4;

$fs_table           = "menus_multi";
$field_id           = "mnu_id";
$field_name			= "mnu_name";
$field_upload		= "mnu_picture";

$fs_filepath		= "../../../pictures/menus/";
$extension_list 	= "jpg,gif,png,swf";
$limit_size			= 30000000;

$arrType = array(
				1 => "Slide trang chủ",
				2 => "Tiêu chuẩn",
				);

$arrTarget = array("_self" => "Hiện hành",
					"_blank" => "Trang mới"
					);

$array_config		= array("image"=>1,"upper"=>1,"order"=>1,"description"=>1);

//check security...
require_once("../../resource/security/security.php");
//Check user login...
checkLogged();
//Check access module...
if(checkAccessModule($module_id) != 1) redirect($fs_denypath);
?>