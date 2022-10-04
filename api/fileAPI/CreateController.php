<?php

// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Headers: *');
// header('Content-type: application/json; charset=UTF-8');

class CreateController{

    protected $prj_path;

    public function __construct($user_id, $prj_name){
        $this->prj_path = '../users/' . $user_id . '/' . $prj_name . '/';
    }

    public function createPrj($prj_name){
        mkdir($this->prj_path);
    }

    public function createTouch($file_name){
        touch($this->prj_path . $file_name . '.html');
        return $file_name  . 'ファイルを作成しました';
    }

    public function globList(){
        return glob($this->prj_path . '*');
    }

    public function copyFile($comName){
        copy('../templates/' . $comName . '.html', $this->prj_path . 'components/' . $comName . '.html');
        if(is_dir('../templates/' . trim($comName))){
            mkdir($this->prj_path . 'templates/' . trim($comName));
            $img_lists = glob('../templates/' . trim($comName) . '/*');
            foreach((array)$img_lists as $img) {
                // copy('../templates/' . $comName . '/' . $img, $this->prj_path . 'templates/' . $comName . '/' . $img);
                $img = explode('/', $img);
                $img = end($img);
                $in_dir_path = '../templates/' . trim($comName) . '/';
                $out_dir_path = $this->prj_path . 'templates/' . trim($comName) . '/';
                $this->copyImg($in_dir_path, $out_dir_path, $img);
            }
        }
    }

    public function copyImg($in_dir_path, $out_dir_path, $img) {
        //resize
        $img_size = getimagesize($in_dir_path . $img);//img data
        // $resize = $this->resize($img_size, 3762, 2508);
        $img_in = imagecreatefromjpeg($in_dir_path . $img);//move memory
        $img_out = imagecreatetruecolor(3762, 2508);//img bg color
        imagealphablending($img_out, false);
        imagesavealpha($img_out, true);
        imagecopyresampled($img_out, $img_in, 0, 0, 0, 0, 3762, 2508, 3762, 2508);
        imagejpeg($img_out, $out_dir_path . $img);
        imagedestroy($img_in);
        imagedestroy($img_out);
    }

    public function resize($img, $w, $h) {
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
    
    //サニタイズ
    function h($var) {
        return htmlspecialchars($var, ENT_QUOTES);
    }

    public function csv($comName, $fileName){
        $fp = fopen($this->prj_path . $fileName . '.csv', 'a');
        fputs($fp, $comName . "\n");
        fclose($fp);
    }

    public function csvJsonEn($fileName){
        $fp = fopen($this->prj_path . $fileName. '.csv', 'r');
        $ary = [];
        // $ary = fgets($fp);
        while($row = fgets($fp)) {
            $ary[] = $row;
        }
        fclose($fp);
        return $ary;
    }

    //テンプレートの削除
    public function deleteFile($deleteFile,$file){
        // touch("./users/1/project/index.csv");

        $deleteFile = trim($deleteFile);
        $ary = [];
        $ok_ary = [];

        $fp = fopen($this->prj_path . $fileName . '.csv',"r");
        $i = 0;
        while(($ary[] = fgetcsv($fp)) !== FALSE){
            if($ary[$i][0] != $deleteFile){
                $ok_ary[] = $ary[$i][0];
            }
            if($deleteFile == 'template1'){
            }
            $i++;
        }
        fclose($fp);

        $fp = fopen($this->prj_path . $fileName . '.csv',"w");
        for($i=0;$i<count($ok_ary);$i++){
            fputs($fp, $ok_ary[$i]."\n");
        }
        fclose($fp);
    }

    public function getFile($file){
        $ary = [];
        
        $fp = fopen($this->prj_path.$file.".csv","r");
        while(($row = fgets($fp))){
            $ary[] = $row;
        }
        fclose($fp);
        return $ary;
    }

    public function fileRead($file_lists, $tag){
        $ary_code = [];
        for($i = 0; $i < count($file_lists); $i++){
            $data = htmlentities(file_get_contents($this->prj_path . 'components/' . trim($file_lists[$i]) . '.html'), ENT_QUOTES, 'UTF-8');
            $data = explode( "\n", $data);
            $cnt = count($data);
            $ary_code[] = $this->tagSearch($data, $cnt, $tag);
            
        }
        return $ary_code;
    }

    public function tagSearch($data, $line, $tag){
        $start = htmlentities('<' . $tag . '>', ENT_QUOTES, 'UTF-8');
        $end = htmlentities('</' . $tag . '>', ENT_QUOTES, 'UTF-8');
        $stc = null;
        $ary = [];
        for($i = 0; $i < $line; $i++){
            if($data[$i] == $end){
                return $ary;
            }
            if($data[$i] == $start){
                // var_dump($data[$i]);
                $stc = $i;
            }
            if(isset($stc) && $stc < $i){
                $ary[] = $data[$i];
                // var_dump($data[$i]);
            }
        }
        // // var_dump($ary);
        // return $ary;
    }

    public function wFileWrite($fileName, $ary, $tag){
        $fp = fopen($this->prj_path . $fileName . '.html', 'w');

        //code 書き込み
        fputs($fp, html_entity_decode('<' . $tag . '>', ENT_QUOTES, 'UTF-8') . "\n");
        foreach($ary as $file){
            foreach($file as $code){
                fputs($fp, html_entity_decode($code, ENT_QUOTES, 'UTF-8') . "\n");
            }
        }

        fputs($fp, html_entity_decode('</' . $tag . '>', ENT_QUOTES, 'UTF-8') . "\n");
        
        fclose($fp);
    }

    public function aFileWrite($fileName, $ary, $tag){
        $fp = fopen($this->prj_path . $fileName . '.html', 'a');

        //code 書き込み
        fputs($fp, html_entity_decode('<' . $tag . '>', ENT_QUOTES, 'UTF-8') . "\n");
        foreach($ary as $file){
            foreach($file as $code){
                fputs($fp, html_entity_decode($code, ENT_QUOTES, 'UTF-8') . "\n");
            }
        }
        fputs($fp, html_entity_decode('</' . $tag . '>', ENT_QUOTES, 'UTF-8') . "\n");
        
        fclose($fp);
    }

}