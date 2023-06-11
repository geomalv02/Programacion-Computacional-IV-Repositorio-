<?php
    //archivo
    //$file="datos.txt";
    define("FILE", "datos.txt")

//funcion para listar datos
function getdata(){
    //si el archivo no existe lo creamos
    if(!file_exists(FILE)){
        file_put_contents(FILE,'');
    }
    //obtener los datos del archivo
    $data= file_get_contents(FILE);
    $data= json_decode($data, true);

    //si los datos no son array, lo inicializamos
    if(!is_array($data)){
        $data=getdata();

        //crear nuevo registro
        $record = array(
            "name" => $name,
            "lastname" => $lastname,
            "age" => $age
        );

    //agregar el nuevo registro al array de datos
    $data[] = $record;

        //agregar el nuevo registro al array de estos
        $data = json_decode($data);
        file_put_contents(FILE, $data);

    }

    //funcion para modificar registro
    function updatedata($cod, $name, $lastname, $age){
        //obtenemos los datos actuales del archivo
        $data=getdata();

        //actualizamos el registro correspondiente
        $data = json_encode($data);
        file_put_contents(FILE, $data);
    }

    //funcion para eliminar
    function deletedata($cod){
        //obtener los datos
        $data= getdata();

        //eliminar registro
        unset($data[$cod]);

        //reindexar el array
        $data=array_values($data);

        //convertimos el array a formato json y guardar archivo
        $data = json_encode($data);
        file_put_contents("datos.txt", $data);
    }
}

?>

