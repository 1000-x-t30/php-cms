<?php

function zip($path, $zipfile)
{
	$za = new ZipArchive();
	$za->open($zipfile, ZIPARCHIVE::CREATE);
	zipSub($za, $path);
	$za->close();
}
function zipSub($za, $path, $parentPath = '')
{
	$dh = opendir($path);
	while (($entry = readdir($dh)) !== false) {
		if ($entry == '.' || $entry == '..') {
		} else {
			$localPath = $parentPath.$entry;
			$fullpath = $path.'/'.$entry;
			if (is_file($fullpath)) {
				$za->addFile($fullpath, $localPath);
			} else if (is_dir($fullpath)) {
				$za->addEmptyDir($localPath);
				zipSub($za, $fullpath, $localPath.'/');
			}
		}
	}
	closedir($dh);
}

zip('../users', 'project.zip');
$zip_tmp_path = './';
$zip_name = 'project.zip';
//ダウンロード
header('Content-Type: application/force-download;');
header('Content-Length: '.filesize($zip_tmp_path.$zip_name));
header('Content-Disposition: attachment; filename="'.$zip_name.'"');
readfile($zip_tmp_path.$zip_name);
unlink($zip_tmp_path.$zip_name);