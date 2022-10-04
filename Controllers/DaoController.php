<?php
// namespace config\Controllers\DaoController;


class dao{

    //宣言
    protected $cn;
    protected $result;

    public function __construct($host, $user, $password, $db){
        $this->cn = mysqli_connect($host, $user, $password, $db);
        mysqli_set_charset($this->cn, 'utf8');
    }

    //全取得
    public function get($sql){
        $result = mysqli_query($this->cn, $sql);
        $ary = [];
        while($row = mysqli_fetch_assoc($result)) {
            $ary[] = $row;
        }
        return $ary;
    }

    //実行
    public function query($sql){
        $this->result = mysqli_query($this->cn, $sql);
    }

    //一行取得
    public function get_row(){
        return !is_null($row = mysqli_fetch_assoc($this->result))? $row : false;
    }

    public function __destruct(){
        mysqli_close($this->cn);
    }


}