<?
/**
 * Không khai báo các biến từ sql tại đây để dùng chung cho nhiều nơi
***/

define('VERSION_PATH', 'v1');

// Khai bao bien GETPOST
$type              	        = getValue('type', 'str', 'GET', '');
$module                     = getValue('module', 'str', 'GET', '');
$iCat                       = getValue('iCat');
$iData                      = getValue('iData');
$sCat                       = getValue('sCat', 'str', 'GET', '', 1);
$sData                      = getValue('sData', 'str', 'GET', '', 1);
$keyword                    = getValue('keyword', 'str', 'GET', '', 1);
$page                       = getValue('page', 'str', 'GET', '');

// Khai bao bien dung cho sql
$lang_id                    = 1;
$sqlcategory         		= '';
$sqlcategoryA		   		= '';
$listiCat			   		= 0;
$sqlmenusub          		= '';
$cat_cha                    = 0;
$cat_cha2                   = 0;
$cat_child                  = 0;
$link_canonical             = isset($_SERVER['REQUEST_URI']) ? removeQueryString($_SERVER['REQUEST_URI']) : '';

$var_version_up             = '20140822';

$domain_static              = '';
$var_path_ajax              = $domain_static . '/ajax/';
$var_path_ajax_v1           = $domain_static . '/ajax_v1/';
$var_path_ajax_v2           = $domain_static . '/ajax_v2/';
$var_path_root              = $domain_static . '/home/';

$var_path_picture           = $domain_static . '/pictures/';
$path_pictures_menus		= $var_path_picture . 'menus/';
$path_pictures_cat			= $var_path_picture . 'categories/';

$var_path_theme				= $domain_static . '/themes/';
$var_path_images            = $var_path_theme . VERSION_PATH . '/img/';
$var_path_js                = $var_path_theme . VERSION_PATH . '/js/';
$var_path_css               = $var_path_theme . VERSION_PATH . '/css/';

$path_no_image              = $var_path_images . 'noimage.jpg';


$time_start_load_page       =	microtime_float();

// -------------------- TYPE + MODULE -------------------- //                         

// Khai bao css va js trong header
$var_tag_head_css_v1          = '';
$var_tag_head_js_v1           = '';
if(!checkServerOrLocal() || $con_min_css_js == 0){

	// Css local
	foreach($arrayCssFile as $k => $v){
		$var_tag_head_css_v1   .= '<link href="' . $domain_static . $v . '" rel="stylesheet" type="text/css">' . chr(10);
	}

	// Js local
	foreach($arrayJsFile as $k => $v){
	   $var_tag_head_js_v1       .= '<script src="' . $domain_static . $v . '" type="text/javascript"></script>' . chr(10);
	}

   // Css Js Minify   
   if(!checkServerOrLocal()){
      $var_tag_head_css_v1      .= '<link href="' . $domain_static . '/only_local/css.php" rel="stylesheet" type="text/css">' . chr(10);      
      $var_tag_head_js_v1 		.= '<script src="' . $domain_static . '/only_local/js.php" type="text/javascript"></script>' . chr(10);
   }

}else{
	$var_tag_head_css_v1         .= '<link href="' . $domain_static . '/themes/v1/css/style_all.css?v=' . $con_version_up . '" rel="stylesheet" type="text/css">' . chr(10);
	$var_tag_head_js_v1          .= '<script src="' . $domain_static . '/themes/v1/js/js_all.js?v=' . $con_version_up . '" type="text/javascript"></script>' . chr(10);
} // End if(!checkServerOrLocal() || $con_min_css_js == 0)

// Javascript External
$var_tag_analytic             = '';
$var_tag_head_more            = '';
if(checkServerOrLocal()){
   // Google analytics
   $var_tag_analytic   .= "<script>
							      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
							      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
							      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
							      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
							      ga('create', 'UA-51633230-1', 'vatgia.com');
							      ga('send', 'pageview');
							      </script>
									";
   
   // Vchat
   //*/
   $var_tag_head_more  .= "<script>
							      (function() {
							      var _h1= document.getElementsByTagName('title')[0] || false;
							      var product_name = '';
							      if(_h1){
							      product_name= _h1.textContent || _h1.innerText;
							      }
							         var ga = document.createElement('script');
							         ga.type = 'text/javascript';
							         ga.src = 'http://live.vnpgroup.net/js/web_client_box.php?hash=29828020cfa4b9e9a8d69afdb6105650&data=eyJzc29faWQiOjE1MTU5NDEsImhhc2giOiIyMTU5N2VkZGUzNTQ5YjczOWY2ZjE3NGFkNWZlNmFjNiJ9&pname='+product_name;
							         var s = document.getElementsByTagName('script');
							         s[0].parentNode.insertBefore(ga, s[0]);
							      })();
							      </script>
							      ";
   //*/
} // End if(checkServerOrLocal)