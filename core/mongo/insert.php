<?php
    function insert($collection, $obj){

        require_once __DIR__."/manager.php";

        $db = new \MongoDB\Driver\BulkWrite;
        $db->insert($obj);
        $manager->executeBulkWrite($collection, $db);
    }