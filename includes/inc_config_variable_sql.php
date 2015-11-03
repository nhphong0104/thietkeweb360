<?
/**
 * Lay cac bien config tu trong databale
 */
$db_con = new db_query("SELECT * from configuration WHERE lang_id = ". $lang_id);
if ($row=mysql_fetch_array($db_con->result)){
	while (list($data_field, $data_value) = each($row)) {
		if (!is_int($data_field)){
			//tao ra cac bien config
			$$data_field = $data_value;
			//echo $data_field . "= $data_value <br>";
		} // End if (!is_int($data_field))

	} // End while (list($data_field, $data_value) = each($row))

} // End if ($row=mysql_fetch_array($db_con->result))
$db_con->close();
unset($db_con);