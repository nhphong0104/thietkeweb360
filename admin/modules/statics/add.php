<?
require_once("inc_security.php");

#+
#+ Kiem tra quyen them sua xoa
checkAddEdit("add");

#+
#+ Khai bao bien
$add				= "add.php";
$listing			= "listing.php";
$edit				= "edit.php";
$after_save_data	= getValue("after_save_data", "str", "POST", $listing);

$errorMsg 			= "";		//Warning Error!
$action				= getValue("action", "str", "POST", "");
$fs_action			= getURL();
$record_id			= getValue("record_id");

$sta_strdate		= getValue("sta_strdate", "str", "POST", date("d/m/Y"));
$sta_strtime		= getValue("sta_strtime", "str", "POST", date("H:i:s"));
$sta_date			= convertDateTime($sta_strdate, $sta_strtime);


#+
#+ Array Category
$class_menu			= new menu();
$listAll				= $class_menu->getAllChild("categories_multi", "cat_id", "cat_parent_id", 0, "cat_type='static' AND lang_id = " . $lang_id, "cat_id,cat_name,cat_type", "cat_order ASC,cat_name ASC", "cat_has_child", 0);
unset($class_menu);

#+
#+ Goi class generate form
$myform = new generate_form();	//Call Class generate_form();
$myform->removeHTML(0);	//Loại bỏ chức năng không cho điền tag html trong form
#+
#+ Khai bao bang du lieu
$myform->addTable($fs_table);	// Add table
#+
#+ Khai bao thong tin cac truong
$myform->add("sta_category_id", "sta_category_id", 1, 0, 0, 1, "Bạn chưa chọn danh mục.", 0, "");
$myform->add("sta_title", "sta_title", 0, 0, "", 1, "Bạn chưa nhập tiêu đề.", 0, "");
$myform->add("sta_order", "sta_order", 1, 0, 0, 1, "Thứ tự phải lớn hơn hoặc bằng 0.", 0, "");
$myform->add("sta_date", "sta_date", 1, 1, 0, 0, "", 0, "");
$myform->add("sta_description", "sta_description", 0, 0, "", 0, "", 0, "");
$myform->add("sta_description1", "sta_description1", 0, 0, "", 0, "", 0, "");

#+
#+ đổi tên trường thành biến và giá trị
$myform->evaluate();

#+
#+ Neu nhu co submit form
if($action == "submitForm"){

	#+
	#+ Kiểm tra lỗi
    $errorMsg .= $myform->checkdata();
	$errorMsg .= $myform->strErrorField ;	//Check Error!
	if($errorMsg == ""){

		#+
		#+ Thuc hien query
		$db_ex	 		= new db_execute_return();
		$query			= $myform->generate_insert_SQL();
		$last_id 		= $db_ex->db_execute($query);
		$record_id 		= $last_id;
		//echo $query;exit();

		$iType			= getValue("mnu_type","int","POST","");
		$iParent		= getValue("mnu_parent_id","str","POST","");
		$fs_redirect 	= $after_save_data. "?record_id=".$record_id."&category=".getValue("sta_category_id","int","POST");
		redirect($fs_redirect);
		exit();

	}
}

#+
#+ Khai bao ten form
$myform->addFormname("submitForm"); //add  tên form để javacheck
#+
#+ Xử lý javascript
$myform->addjavasrciptcode('');
$myform->checkjavascript();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?=$load_header?>
</head>
<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
<? /*------------------------------------------------------------------------------------------------*/ ?>
<?=template_top(translate_text("Records Add"))?>
<? /*------------------------------------------------------------------------------------------------*/ ?>
<?
$form = new form();
$form->create_form("form_name",$fs_action,"post","multipart/form-data",'onsubmit="validateForm();return false;"  id="form_name" ');
$form->create_table();
?>
<?=$form->text_note('Những ô dấu sao (<font class="form_asterisk">*</font>) là bắt buộc phải nhập.')?>
<?=$form->errorMsg($errorMsg)?>

<?=$form->select_db_multi("Danh mục", "sta_category_id", "sta_category_id", $listAll, "cat_id", "cat_name", $sta_category_id, "Danh mục", 1, "", 1, 0, "", "")?>
<?=$form->text("Tiêu đề", "sta_title", "sta_title", $sta_title, "Tiêu đề", 1, 250, "", 255, "", "", "")?>
<?=$form->text("Thứ tự", "sta_order", "sta_order", $sta_order, "Thứ tự", 2, 50, "", 255, "", "", "")?>
<?=$form->text("Ngày tạo", "sta_strdate" . $form->ec . "sta_strtime", "sta_strdate" . $form->ec . "sta_strtime", $sta_strdate . $form->ec . $sta_strtime, "Ngày (dd/mm/yyyy)" . $form->ec . "Giờ (hh:mm:ss)", 0, 70 . $form->ec . 70, $form->ec, 10 . $form->ec . 10, " - ", $form->ec, "&nbsp; <i>(Ví dụ: dd/mm/yyyy - hh:mm:ss)</i>");?>
<?=$form->close_table();?>
<?=$form->wysiwyg("Mô tả chi tiết", "sta_description", $sta_description, "../../resource/ckeditor/", "95%", 300)?>
<?=$form->create_table();?>
<?=$form->close_table();?>
<?=$form->wysiwyg("Bản lưu", "sta_description1", $sta_description1, "../../resource/ckeditor/", "95%", 300)?>
<?=$form->create_table();?>

<?=$form->radio("Sau khi lưu dữ liệu", "add_new" . $form->ec . "return_listing" . $form->ec . "return_edit", "after_save_data", $add . $form->ec . $listing . $form->ec . $edit, $after_save_data, "Thêm mới" . $form->ec . "Quay về danh sách" . $form->ec . "Sửa bản ghi", 0, "" . $form->ec . "" . $form->ec . "");?>
<?=$form->button("submit" . $form->ec . "reset", "submit" . $form->ec . "reset", "submit" . $form->ec . "reset", "Cập nhật" . $form->ec . "Làm lại", "Cập nhật" . $form->ec . "Làm lại", 'style="background:url(' . $fs_imagepath . 'button_1.gif) no-repeat; border:none;"' . $form->ec . 'style="background:url(' . $fs_imagepath . 'button_2.gif) no-repeat; border:none;"', "");?><br />
<?=$form->hidden("action", "action", "submitForm", "");?>

<?
$form->close_table();
$form->close_form();
unset($form);
?>
<? /*------------------------------------------------------------------------------------------------*/ ?>
<?=template_bottom() ?>
<? /*------------------------------------------------------------------------------------------------*/ ?>
</body>
</html>