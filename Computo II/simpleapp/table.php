<?php
    //incluimos archivo de funciones
    include "functions.php";

    //obtenemos los datos
    $data=getdata();
?>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $cod => $record){ ?>
        <tr>
            <td><?php echo $record['name']; ?></td>
            <td>>?php echo $record['lastname']; ?></td>
            <td><?php echo $record['age']?></td>
            <td>
                <a href="form.php?cod=<?php echo $cod; ?>">Editar</a>

                <form action="crud.php" method="POST">
                    <input type="text" name="action" value="eliminar" />
                    <input type="text" name="cod" value="<?php echo $cod; ?>" />
                    <button type="submit" onclick="return 
                    confirm('Estas seguro que desea eliminar el registro?');">Eliminar</button>

                </form>
            </td>
        </tr>

        <?php } ?>
    </tbody>
</table>
<a> href="form.php">Nuevo Registro</a>

