<?php

class SMSEdge {
    private $db;

    public function __construct() {
        $this->db = DB::getConnection();
    }

    public function getData( $date_from, $date_to, $cnt_id = null, $usr_id = null ) {
        $query = "
        SELECT * FROM send_log
        WHERE log_created between $date_from and $date_to";

        if ( !is_null($cnt_id) ) {
            $query += " AND cnt_id = $cnt_id";
        }

        if ( !is_null($usr_id)) {
            $query += " AND usr_id = $usr_id";
        }

        $query += "GROUP BY log_created";
    }


}