<?php

if(isset($_POST['process']) && $_POST['process'] === 'openCom'){

    //ファイル出力
    require_once './fileAPI/CreateController.php';
    $fd = new CreateController($_POST['id'], $_POST['project']);
    header("Content-Type: application/json; charset=utf-8");
    $json = json_encode($fd->getFile($_POST['fileName']), JSON_UNESCAPED_SLASHES);
    // $fp = fopen('test.csv', 'w');
    // fputs($fp, $json);
    // fclose($fp);
    echo($json);
    // return $json;
}

//テンプレート追加
elseif(isset($_POST['process']) && $_POST['process'] === 'comAdd'){

    //素材追加
    require_once './fileAPI/CreateController.php';
    $fd = new CreateController($_POST['id'], $_POST['project']);
    $fd->copyFile($_POST['comName']);
    $fd->csv($_POST['comName'], $_POST['fileName']);
    header("Content-Type: application/json; charset=utf-8");
    $json = json_encode($fd->csvJsonEn($_POST['fileName']), JSON_UNESCAPED_SLASHES);
    // $json = $fd->csvJsonEn();
    // $fp = fopen('test.csv', 'w');
    // fputs($fp, $json);
    // fclose($fp);
    file_put_contents("test.json", $json);
    echo($json);
}

//テンプレート削除
elseif(isset($_POST['process']) &&  $_POST['process'] === 'comDelete'){
    require_once './fileAPI/CreateController.php';
    $fd = new CreateController($_POST['id'], $_POST['project']);
    $fd->deleteFile($_POST['comName'],$_POST['fileName']);
}

//作成ファイル読み取り
elseif(isset($_POST['process']) && $_POST['process'] === 'render'){
    require_once './fileAPI/CreateController.php';
    $fd = new CreateController($_POST['id'], $_POST['project']);
    header("Content-Type: application/json; charset=utf-8");
    $json = json_encode($fd->csvJsonEn($_POST['fileName']), JSON_UNESCAPED_SLASHES);
    echo($json);
}

//ファイル保存
elseif(isset($_POST['process']) && $_POST['process'] === 'fileSave'){
    require_once './fileAPI/CreateController.php';
    $fd = new CreateController($_POST['id'], $_POST['project']);
    $ary = $fd->csvJsonEn($_POST['fileName']);
    
    //css
    $html_data = $fd->fileRead($ary, 'style');
    $fd->wFileWrite($_POST['fileName'], $html_data, 'style');

    //html
    $html_data = $fd->fileRead($ary, 'body');
    $fd->aFileWrite($_POST['fileName'], $html_data, 'body');
}


// http://localhost:8888/hew/api/route.php?process=comAdd&comName=header1&fileName=index&id=1&project=project
