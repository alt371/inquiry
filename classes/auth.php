<?php
require_once dirname(__FILE__).'/../lib/db.php';
session_start();

/**
 * 管理画面の認証関連の処理を行うクラス
 * @class Auth
 */
class Auth {
    private $table_name = 'admin';

    /**
     * ログインしているか否か判別する
     * NOTE: ログインしている状態 = $_SESSIONに`user`というキーがある
     * @static
     * @param なし
     * @return {bool} ログインしていればtrue, してなければfalse
     */
    public static function isLogin() {
        return isset($_SESSION['user']);
    }

    /**
     * ユーザ名とパスワードを与え、データベースと照合を行う
     * @static
     * @param {string} name ユーザ名
     * @param {string} password パスワード
     * @return {bool} ログインに成功すればtrue, 失敗すればfalse
     */
    public static function authenticate($name, $password) {

    }

    /**
     * ユーザ情報をセッションに保存する
     * @static
     * @param {string} user ユーザ名
     * @return なし
     */
    public static function setUser($name) {
        $_SESSION['user'] = $name;
    }
}
