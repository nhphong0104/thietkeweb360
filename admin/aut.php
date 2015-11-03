<?
// Check ip trust
if (!file_exists("../ipstore/" . ip2long($_SERVER['REMOTE_ADDR']) . ".cfn")){
	exit("Liên hệ quản trị để được vào khu vực này");
}

$users = array('vgvg' => 'mauwhite');
$realm	= "doc.vnpgroup.net";
function dieAuthen(){
	$array = array("code" => 401, "msg" => "401 Not Authorized");
	header('HTTP/1.1 401 Unauthorized', true, 401);
	die(json_encode($array));
}
function getHeaderAuthen(){
	global $realm;
	header('HTTP/1.1 401 Unauthorized');
	header('WWW-Authenticate: Digest realm="'.$realm.
 	    '",qop="auth",nonce="'.uniqid().'",opaque="'.md5($realm).'"');	
	dieAuthen();
}
// function to parse the http auth header
function http_digest_parse($txt)
{
    // protect against missing data
    $needed_parts = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
    $data = array();
    $keys = implode('|', array_keys($needed_parts));

    preg_match_all('@(' . $keys . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $matches, PREG_SET_ORDER);

    foreach ($matches as $m) {
        $data[$m[1]] = $m[3] ? $m[3] : $m[4];
        unset($needed_parts[$m[1]]);
    }

    return $needed_parts ? false : $data;
}

$authen_allow = false;
$api_id		  = '';
function http_spreaker_parse($txt)
{
    // protect against missing data
    $needed_parts = array('nonce'=>1, 'username'=>1, 'timestamp'=>1, 'response'=>1);
    $data = array();
    $data = explode(":",$txt);
    $arrayReturn = array();
    if(count($needed_parts) != count($data)){
    	return false;
    }
    $i = 0;
    foreach($needed_parts as $key => $val){
    	$arrayReturn[$key] = $data[$i];
    	$i++;
    }
    return $arrayReturn;
}

if (empty($_SERVER['PHP_AUTH_DIGEST']) && empty($_SERVER["HTTP_X_SPREAKER_AUTH"])) {
	getHeaderAuthen();
}
//truong hop danh cho android request len
if(!empty($_SERVER["HTTP_X_SPREAKER_AUTH"])){
	if (!($data = http_spreaker_parse($_SERVER["HTTP_X_SPREAKER_AUTH"])) ||
	    !isset($users[$data['username']])){
	    	getHeaderAuthen();
			dieAuthen();
	    }
  	$api_id = $data['username'];
	$valid_response  = md5($data['nonce'] . ":" . $data['username'] . ":" . $users[$data['username']] . ":" . $data["timestamp"]);
	if ($data['response'] == $valid_response){
			$authen_allow = true;
	}
}
//truong hop browser dang nhap
if(!empty($_SERVER['PHP_AUTH_DIGEST']) && !$authen_allow){
	// analyze the PHP_AUTH_DIGEST variable
	if (!($data = http_digest_parse($_SERVER['PHP_AUTH_DIGEST'])) ||
	    !isset($users[$data['username']])){
	    	getHeaderAuthen();
			dieAuthen();
	    }
	// generate the valid response
	$A1 = md5($data['username'] . ':' . $realm . ':' . $users[$data['username']]);
	$A2 = md5($_SERVER['REQUEST_METHOD'].':'.$data['uri']);
	$valid_response = md5($A1.':'.$data['nonce'].':'.$data['nc'].':'.$data['cnonce'].':'.$data['qop'].':'.$A2);
	
	if ($data['response'] == $valid_response){
			$authen_allow = true;
	}
}

if(!$authen_allow){
	getHeaderAuthen();
	dieAuthen();
}
?>