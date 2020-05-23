<?php
    require_once __DIR__."/manager.php";
    //lista td o db
    $db = new \MongoDB\Driver\Query([]);

    $data = $manager->executeQuery('aula.cadastro', $db);

    require_once  __DIR__."/../views/dash.php";
