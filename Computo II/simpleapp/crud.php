<?php
    //incluimos en archivo con las funciones
    include "functions.php";

    //obtener la accion a realizar
    $action=$_POST["action"];

    //obtener los valores del formulario
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];

    //evaluamos las acciones
    if($action == "guardar"){
        //guardar los datos con un array
        saveData($name, $lastname, $age);
        //redirigir
        header('Location: index.php');
    }

    //funcion para editar registro
    if($action == "editar"){
        $cod = $_POST['cod'];

        //actualizar datos
        updatedata($cod, $name, $lastname, $age);

        //redirigir
        header('Location: index.php');
    }

    //eliminar registro
    if($action == "eliminar"){
        $cod = $_POST['cod'];

        //llamado a la funcion eliminar
        deletedata($cod);
        header('Location: index.php');
    }

?>

