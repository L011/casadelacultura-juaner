<?php

    if (!is_file("../modelo/Crud.php")){

        echo "Falta definir la clase crud";
        exit;
}

    require_once ("../modelo/Crud.php");

    $datos=array(
            'Cedula' => $_POST['idDirectorSalon'],
            'Correo' => $_POST['Correo'],
            'Nombre1' => $_POST['Nombre1'],
            'Nombre2' => $_POST['Nombre2'],
            'Apellido1' => $_POST['Apellido1'],
            'Apellido2' => $_POST['Apellido2']);

            echo Crud::insertarDatos($datos);

?>



<!-- idDirectorSalon
Cedula
Correo
Nombre1
Nombre2
Apellido1
Apellido2 -->