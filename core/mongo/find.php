<?php

    function find($filter, $options, $collections){

        require_once __DIR__."manager.php";

        $db = new \MongoDB\Driver\Query($filter, $options);

        $cursor = $manager->executeQuery($collection, $db);

        return $cursor;
    }