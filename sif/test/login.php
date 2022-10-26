<?php

            include '../controladores/controladorlogin.php';
            $controladorLogin = new ControladorLogin();
            $resultado = $controladorCliente->consultarRegistro();
            while ($fila = $resultado->fetch_assoc()) {
                if ($_POST['identificacion'] == $fila['identificacion'] && $_POST['contraseña'] == $fila['contraseña']) {
                    if ($fila['tipo'] == "T1") {
                        echo "<script>
                        location.href = '../vistas/T1.html'
                        </script>";
                    } elseif ($fila['tipo'] == "T2") {
                        echo "<script>
                        location.href = '../vistas/T2.html'
                        </script>";
                    } elseif ($fila['tipo'] == "T3") {
                        echo "<script>
                        location.href = '../vistas/T3.html'
                        </script>";
                    }
                    
                }
            }

        ?>