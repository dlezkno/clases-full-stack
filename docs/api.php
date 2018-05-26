<?php

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        if(isset($_POST['celular'])){
            $celular = $_POST['celular'];
            if(isset($_POST['tipoDoc'])){
                $tipoDoc = $_POST['tipoDoc'];
                if(isset($_POST['document'])){
                    $document = $_POST['document'];
                    echo '{"status":"success","message":"todos los datos llegaron correctamente"}';
                }else{
                    echo '{"status":"fault","message":"hace falta el campo document"}';
                }
            }else{
                echo '{"status":"fault","message":"hace falta el campo tipoDoc"}';
            }
        }else{
            echo '{"status":"fault","message":"hace falta el campo celular"}';
        }
    }else{
        echo '{"status":"fault","message":"hace falta el campo email"}';
    }
}else{
    echo '{"status":"fault","message":"hace falta el campo nombre"}';
}




?>