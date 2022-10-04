<?php
require_once './config/config.php';
//初期化
$user_name = '';
$email = '';
$password = '';
$err = ['name_err' => '', 'email_err' => '', 'password_err' => ''];


//会員登録
if(isset($_POST['sign_up']) && $_POST['sign_up'] === 'sign up') {

    //値
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //値チェック
    $err['name_err'] = errCheck($user_name);
    $err['email_err'] = errCheck($email);
    $err['password_err'] = errCheck($password);

    //画面遷移
    if(empty($err)) {
        header('Location: ./index.php', 307);
        exit;
    }

}
//ログイン
elseif(isset($_POST['login']) && $_POST['login'] === 'Login') {

    //値
    $user_name = $_POST['login_user_name'];
    $password = $_POST['login_password'];

    //値チェック
    $err['name_err'] = errCheck($user_name);
    $err['password_err'] = errCheck($password);

    //DB
    if(!empty($err)){
        $dao = new dao(HOST, USER_ID, PASSWORD, DB_NAME);
        $sql = 'SELECT * FROM users;';
        $dao->query($sql);
        $user_info = [];
        while($row = $dao->get_row()){
            if($row['user_name'] == $user_name && $row['password'] == $password){
                $user_info = $row;
            }
        }
    }

    //画面遷移
    if(!empty($user_info)){
        $_SESSION = [
            'id' => $user_info['id'],
            'user_name' => $user_info['user_name'],
            'password' => $user_info['password']
        ];
        header('Location: ./index.php', 307);
        exit;
    }


}

require_once './tpl/login.php';