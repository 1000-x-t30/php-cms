<?php

//サニタイズ
function h($var) {
	return htmlspecialchars($var, ENT_QUOTES);
}

//エラー処理
function errCheck($var){
    $err_msg = [];
    
    trim($var);
    if($var === ''){
        $err_msg[] = '未入力';
        return $err_msg;
    }
    if(!empty($err_msg)){
        return $err_msg;
    }
    return false;
}

//エラーメッセージ表示
function errMsg($err_msg){
    if($err_msg === false) {
		return;
	}
	foreach ((array)$err_msg as $msg) {
		echo '<label class="err">' . $msg . '</label>';
	}
}

//リファラチェック
function referer($server, $url) {
	$referer = isset($server) ? $server : null;
	if($referer === null) {
		return null;
	}
	//parse_url
	$parse_url = parse_url($referer, PHP_URL_PATH);
	$explode = explode('/', $parse_url);
	if(end($explode) == $url) {
		return true;
	}
	return false;
}

//ハッシュ化
function hashFunc($pass, $solt, $cnt) {
	for($i = 0; $i < $cnt; $i++) {
		$pass = md5($solt.$pass);
	}
	return $pass;
}

function resize($img, $w, $h) {
    $width =  $img[0] / $w;
    $height = $img[1] / $h;

	if($img[0] < $w && $img[1] < $h) {
		return 1;
	}
    if($width > $height) {
        return $width;
    }
    return $height;
}

function pager($first, $cnt, $total) { // 何ページ目、何件表示、全何件
	//dataList
	$pager = [
		'first' => $first,//何ページ目
		'cnt' => $first * $cnt - $cnt,//何番目から
		'list' => $first * $cnt,//何番目まで
		'page' => ''//全ページ
	];

	$pager['page'] = ceil($total / $cnt);
	return $pager;
}

