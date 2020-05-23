<?php
    require_once __DIR__."/../core/mongo/find.php";

    //tramsformar a hash da ID em um objeto
    $id = new \MongoDB\BSON\ObjectId($_GET['id']);

    $filter = ['_id'=>$id];
    $options = [];
    $collection = 'aula.cadastro';

    $data = find($filter, $opstions, $collection)

    //$db = new \MongoDB\Driver\Query(['_id'=>$id]);

    //$data = $manager->executeQuery('aula.cadastro', $db);
    
    require_once  __DIR__."/../views/editar.php";