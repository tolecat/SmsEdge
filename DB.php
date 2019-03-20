<?php

class DB {
    private static $_instance = null;

    public static function getConnection() {
        if ( self::$_instance === null ) {
            self::$_instance = new mysqli('localhost', 'root', '', 'smsedge');
        }

        return self::$_instance;
    }
}