<?php
class Util {
    /**
     * リダイレクトを行う
     * NOTE: この関数を呼ぶ前に1文字でもechoしていたら動かない
     * @static
     * @param {string} url リダイレクトするURL
     * @param {int} [code] httpステータスコード（デフォルトは302 Found）
     * @return なし
     */
    public static function redirect_to($url, $code = 302) {
        header("Location: $url", true, $code);
        exit;
    }
}
