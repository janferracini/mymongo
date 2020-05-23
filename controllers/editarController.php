<?php
    require_once __DIR__."/manager.php";

    //tramsformar a hash da ID em um objeto
    $id = new \MongoDB\BSON\ObjectId($_GET['id']);

    $db = new \MongoDB\Driver\Query(['_id'=>$id]);

    $data = $manager->executeQuery('aula.cadastro', $db);
    
    require_once  __DIR__."/../views/editar.php";