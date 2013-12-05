<?php
require_once dirname(__FILE__).'/../config.php';

class DB {
    private $pdo;

    function __construct() {
        $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';';
        $this->pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    }

    /**
     * 与えられたテーブル名のデータを全件取得する
     * @param {string} table_name テーブル名
     * @return {array} table_nameテーブルに入っている全件のデータの連想配列
     */
    public function fetchAll($table_name) {
        $sth = $this->pdo->prepare("select * from ".$table_name);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}
