<?php

    include("conexion.php");
    if($_SERVER['REQUEST_METHOD']==='POST') {
        $username_registro=$_POST['username_registro'];
        $email_registro=$_POST['email_registro'];
        $pass_registro=$_POST['pass_registro'];
        $confirm_pass=$_POST['confirm_pass'];


    if($pass_registro===$confirm_pass) {
            $password=password_hash(password: $pass_registro, algo: PASSWORD_BCRYPT);


            /*echo "username:$username_registro<br>";
            echo "Email: $email_registro <br>";
            echo "contraseña: $password <br>";*/



            $chequear_user=$conn->prepare("SELECT * FROM registro WHERE username_registro=?");
            $chequear_user->bind_param( "s",
             $username_registro);
            $chequear_user->execute();
            $resultado=$chequear_user->get_result();
            if($resultado->num_rows>0) {

                echo '<script>alert("El nombre de usuario ya existe.Por favor elige otro.");</script>';
                echo'<script>window.location.href="form_registrarse.php";</script>';

            }
            else{

$insertar_bd=$conn->prepare("INSERT INTO registro ( username_registro,email_registro,pass_registro)
VALUES (?,?,?)");

                if( $insertar_bd->execute(params:[$username_registro,$email_registro,$password])) {

                    header(header:"location:form_login.php");
                }
                else{
                    echo "Error".$insertar_bd->error;
                }
            }


            }
            else{
                echo '<script>alert("Las contraseñas no coiciden")</script>';
                echo '<script>window.location.href="form_registrarse.php"</script>';
    }
     


    }



?>