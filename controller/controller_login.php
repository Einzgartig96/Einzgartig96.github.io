<?php 
    // # Credenciales como admin
    $userAdmin = "admin";
    $passwordAdmin = "123";
    // # Credenciales como user
    $user = "user";
    $password = "123";
    if($_POST){
        if($_POST['user'] == $userAdmin && $_POST['password'] == $passwordAdmin) {
            include "view/management.php";
        } else if ($_POST['user'] == $user && $_POST['password'] == $password) {
            include "view/user.php";
        } else {
            // # Hay que añadir una alerta para mostrar que es incorrecto
            echo "Usuario o contraseña incorrecto";
        }
    }else{
        include "view/login.php";
    }
