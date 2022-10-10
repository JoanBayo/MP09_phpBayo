<?php

//QUERY STRING (llegir del http)
function greet()  {
    $name = htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];

    return "Hola $name $surname!";
}
