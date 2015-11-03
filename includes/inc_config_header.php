<?
/**
 * Array Category
 */
$menuid 				= new menu();
$menuid->getArray("categories_multi","cat_id","cat_parent_id"," lang_id = " . $lang_id);

/**
 * Module
 */
if($module != 'home'){
	if( ($iCat == 0 || $sCat == '') && ($iData == 0 || $sData == '') ){
		$con_site_title 			= isset($arrCatType[$module]) ? 'Xem các bài viết về ' . $arrCatType[$module]['typ_name'] : '';
		$con_site_title 		  .= $page != '' ? ' - Trang ' . $page : '';
		$con_meta_description	= $con_site_title;
		$con_meta_keywords		= $con_site_title;	
	}
}

/**
 * Detail News
 */
if(($type == 'news' || $type == 'thongbao') && ($iData != 0 || $sData != '') ){
	
	if($type == 'thongbao'){
		if($iData <= 334){
			$db_thongbao_fix = new db_query("SELECT ntb_new_id FROM news_thongbao WHERE ntb_id = " . $iData . " LIMIT 1");
			if($rowTb = mysql_fetch_assoc($db_thongbao_fix->result)) $iData = $rowTb['ntb_new_id'];
			$db_thongbao_fix->close();
			unset($db_thongbao_fix);
		}
	}
	
	$sql = $iData != 0 ? " AND new_id = " . $iData : " AND new_title_rewrite = '" . $sData . "'";
	$db_news   = new db_query("SELECT new_id, new_category_id, new_title, new_title_rewrite,
											cat_id, cat_name, cat_type
										FROM news
											INNER JOIN categories_multi ON(cat_id = new_category_id AND cat_active = 1)
										WHERE new_active = 1 " . $sql . "
										");
	if($row = mysql_fetch_assoc($db_news->result)){
		$module		= $module == '' ? $row["cat_type"] : $module;
		$iCat			= $iCat == 0 ? $row['new_category_id'] : $iCat;
		$iData		= $iData == 0 ? $row['new_id'] : $iData;
		
		// Thay doi 3 the meta
		$con_site_title 			= $row['new_title'] . ' - ' . $row['cat_name'];
		$con_meta_description	= $row['new_teaser'] != '' ? $row['new_teaser'] : $con_site_title;
		$con_meta_keywords		= $row['cat_name'] . ',' . $row['new_title'];
		
		// Redirect neu ten bai viet khong dung
		if($sData != $row['new_title_rewrite']){
			$link_redirect = createLink('detail_news', array('dat_id' => $row['new_id'], 'dat_rewrite' => $row['new_title_rewrite']) );
			redirect($link_redirect);
		}
	}
	unset($db_news);
	
} // End if($module == 'news' && ($iData != 0 || $sData != '') )

/**
 * Detail Static
 */
if($type == 'static' && ($iData != 0 || $sData != '') ){
	$sql = $iData != 0 ? " AND sta_id = " . $iData : " AND sta_title_rewrite = '" . $sData . "'";
	$db_news   = new db_query("SELECT sta_id, sta_category_id, sta_title, sta_title_rewrite,
											cat_id, cat_name
										FROM statics_multi
											INNER JOIN categories_multi ON(cat_id = sta_category_id AND cat_active = 1)
										WHERE sta_active = 1 " . $sql . "
										");
	if($row = mysql_fetch_assoc($db_news->result)){
		$iCat			= $iCat == 0 ? $row['sta_category_id'] : $iCat;
		$iData		= $iData == 0 ? $row['sta_id'] : $iData;
		
		// Thay doi 3 the meta
		$con_site_title 			= $row['sta_title'] . ' - ' . $row['cat_name'];
		$con_meta_description	= $con_site_title;
		$con_meta_keywords		= $row['cat_name'] . ',' . $row['sta_title'];
		
		// Redirect neu ten bai viet khong dung
		if($sData != $row['sta_title_rewrite']){
			$link_redirect = createLink('detail_news', array('dat_id' => $row['sta_id'], 'dat_rewrite' => $row['sta_title_rewrite']) );
			redirect($link_redirect);
		}
	}
	unset($db_news);
	
} // End if($module == 'static' && ($iData != 0 || $sData != '') )

/**
 * Category
 */
if($iCat != 0 || $sCat != ''){
	$sql = $iCat != 0 ? " AND cat_id = " . $iCat : " AND cat_name_rewrite = '" . $sCat . "'";
	$db_cat = new db_query("SELECT cat_id, cat_parent_id, cat_type, cat_name, cat_name_rewrite, cat_link
									FROM categories_multi
									WHERE cat_active = 1" . $sql . "
									");
	if($row = mysql_fetch_assoc($db_cat->result)){

		$module				= $module == '' ? $row["cat_type"] : $module;
		$iCat					= $iCat == 0 ? $row['cat_id'] : $iCat;

		$cat_cha				= $menuid->getCatcha($iCat);
		$cat_cha_level_2  = $menuid->getCatcha($iCat,2);
		$cat_cha_level_3  = $menuid->getCatcha($iCat,3);
		$sqlmenusub			= " AND cat_id IN(" .  $menuid->getAllChildId($cat_cha)  . ")";
		$listiCat			= $menuid->getAllChildId($iCat);
		$sqlcategory		= " AND cat_id IN(" . $listiCat  . ")";
		$cat_child			= count(explode(",",$listiCat)); // tinh so cap con
		
		// Thay doi 3 the meta
		if($iData == 0){
			$con_site_title 			= $row['cat_name'];
			$con_site_title 		  .= $page != '' ? ' - Trang ' . $page : '';
			$con_meta_description	= $row['cat_name'];
			$con_meta_keywords		= $row['cat_name'];
		} // End if($iData == 0)
		
		// Redirect neu ten bai viet khong dung
		if( ($iData == 0 || $sData == '') && $sCat != $row['cat_name_rewrite']){
			$link_redirect = createLink('cat', array('dat_id' => $row['cat_id'], 'dat_rewrite' => $row['cat_name_rewrite']) );
			redirect($link_redirect);
		}

	} // End if($row = mysql_fetch_assoc($db_cat->result))
	unset($db_cat);
			
} // End if($iCat != 0)

/**
 * Breadcrumbs
 */
$home_address	= '<li><i class="glyphicon glyphicon-home" style="color: #666"></i>&nbsp;&nbsp;<a href="/">Trang chủ</a></li>';
if($module != '') $home_address	.= array_key_exists($module, $arrCatType) ? '<li><a href="/' . $arrCatType[$module]['typ_module'] . '.html">' . $arrCatType[$module]['typ_name'] .'</a></li>' : '';
if($iCat != 0) $home_address .= $menuid->getAllParentList("categories_multi","cat_id","cat_name","cat_parent_id",$iCat,"","",$module,($module!='') ? 1 : 0,$lang_path,'','');