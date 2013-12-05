<?php
require_once dirname(__FILE__).'/../lib/db.php';

class Inquiry {
    const table_name = 'inquiry';

    public static function findAll() {
        $db = new DB();
        return $db->fetchAll(Inquiry::table_name);
    }

    public static function find($id) {

    }

    public static function update($id, $props) {

    }

    public static function delete($id) {

    }
}
