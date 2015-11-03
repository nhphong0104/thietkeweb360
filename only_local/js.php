<?
include("../includes/inc_config_css_js.php");
include('minifier.php');

//
// Khai bao bien
$pathFile 	= "..";
$url_min 	= $path_js_min;

$arrSourceFile		= $arrayJsFile; // Cau hinh array list file o day
$file_check_type 	= 'js'; // Moi array file cau hinh type nay rieng biet
$file_check_edit 	= 'file_check_edit.cfn'; // File check xem co file nao trong list file sua hay khong

// Lay day du duong dan cua file
$arraySourceFilePath = array();
foreach($arrSourceFile as $k => $v){
	$arraySourceFilePath[] = $pathFile.$v;
}

//
// Kiem tra xem file trong list file co bi sua doi hay khong
$check_edit = check_file_edit($file_check_edit, $file_check_type, $arraySourceFilePath);
// $check_edit = 1;

//
// Neu nhu trong list file co file nao bi sua thi thuc hien
if($check_edit != 0 || !is_file($url_min) || filesize($url_min) < 10 || time() - filemtime($url_min) > 900){

	//
	// Minifier Default
	$dataAll = minifyJsDefault($arraySourceFilePath);
	write_content_utf8($url_min, $dataAll);

	//
	// Minifier with service
	//*/
	$arrOption = array(
		'beautify' => '', // Beautify output/specify output options - Làm đẹp code
		'mangle' => '1', // Mangle names/pass mangler options - Đổi(chặt) tên biến để min
		'reserved' => '', // Giữ lại 1 số tên biến từ mangle '$,require,exports'
		'compress' => '1', // Enable compressor/pass compressor options. - Nén
		'comments' => '', // Giữ lại comment có thể dùng 'all' hoặc pregmath '/foo|bar/'
		'packer' => '1', // Co the dung them JS Packer dang compress js eval - Dang nay sieu nen nhung client phai giai nen
		);

	minifyJS($dataAll, $url_min, $arrOption);
	//*/

}

//
// Huy bien
unset($arrSourceFile, $arraySourceFilePath);

