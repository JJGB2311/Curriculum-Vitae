<?php
    $Nombre = filter_input(INPUT_POST, 'Nombre');
    $Correo = filter_input(INPUT_POST, 'Correo');
    $Telefono = filter_input(INPUT_POST, 'Telefono');
    $Empresa= filter_input(INPUT_POST, 'Empresa');
      $Mensaje = filter_input(INPUT_POST, 'Mensaje');

    if (!empty($Nombre)){
    if (!empty($Correo)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "php";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword ,$dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO conexion (Nombre, Correo ,Telefono ,Empresa ,Mensaje)
    values ('$Nombre','$Correo','$Telefono','$Empresa','$Mensaje')";
    if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    }
    else{
    echo "Password should not be empty";
    die();
    }
    }
    else{
    echo "Username should not be empty";
    die();
    }
    ?>