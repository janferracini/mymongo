<?php

require_once __DIR__."/../core/mongo/inert.php";

    //lib principal - insert, delet e update
    $db = new \MongoDB\Driver\BulkWrite;

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    //data recebe o array de objetos
    $data=['cpf'=>$cpf, 'nome'=>$nome, 'email'=>$email];

    insert ('aula.cadastro', $data)
    //insere o array
    //$db->insert($data);

    //executa o insert - escolhe o banco e a tabela/coleção e a query a ser executada
    //$result = $manager->executeBulkWrite('aula.cadastro', $db);
    
    echo "<script>location.href='http://localhost/mymongo'</script>";