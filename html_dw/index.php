<?php

    // // $folder = $_POST['name'];
    // // 丸ごと圧縮するフォルダ
    // $folder = "users";
    // // Zip ファイル名
    // $fileName = $folder.".zip";
    // // ファイルディレクトリ
    // $dir = __DIR__."/users";
    // // Zip ファイルパス
    // $zipPath = $dir. '/' .$fileName;
    // $command =  "cd " . $dir . ";" . "zip -r '" . $fileName . "' ./" . $folder . "/";
    // exec($command);
    // mb_http_output( "pass" ) ;
    // header("Content-Type: application/zip");
    // header("Content-Transfer-Encoding: Binary");
    // header("Content-Length: ".filesize($zipPath));
    // header('Content-Disposition: attachment; filename*=UTF-8\'\'' . $fileName);
    // ob_end_clean();
    // readfile($zipPath);
    // // Zipファイル削除
    // unlink( $zipPath );
    // exit;




    require_once './tpl/index.php';