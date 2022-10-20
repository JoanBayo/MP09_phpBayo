<?php

//QUERY STRING (llegir del http)
use App\Models\task;

function greet()  {
    $name = htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];

    return "Hola $name $surname!";
}

function dd($xivato)
{
    //Ho farem servir per comprovar
    var_dump($xivato);
    die();
}


function fetchAllTasks($dbh){
    $statement = $dbh->prepare('SELECT * FROM tasks;');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, Task::class);

}
