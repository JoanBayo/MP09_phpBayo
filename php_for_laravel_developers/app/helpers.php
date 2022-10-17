<?php

//QUERY STRING (llegir del http)
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
