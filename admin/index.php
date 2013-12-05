<?php
require_once dirname(__FILE__).'/../config.php';
require_once dirname(__FILE__).'/../classes/auth.php';
require_once dirname(__FILE__).'/../classes/inquiry.php';
require_once dirname(__FILE__).'/../lib/util.php';

Auth::setUser('hogehoge');

// ログインしてなかったらログイン画面へリダイレクト
if(! Auth::isLogin()) {
    Util::redirect_to('/admin/login.php');
}

var_dump(Inquiry::findAll());
?>
