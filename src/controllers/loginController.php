<?php
if (!empty($_POST["btningresar"])) {

    if (empty($_POST["email"]) and empty($_POST["password"])){
        echo '<script>
        Swal.fire({
            icon: "error",
            title: "¡ERROR!",
            text: "Campos Vacios",
            showConfirmButton: true,
            confirmButtonText: "ACEPTAR"
        });
    </script>';
    }else {
        $email=$_POST["email"];
        $pass=$_POST["password"];
        $sql=$conn->query(" SELECT * FROM login WHERE userName='$email' and pass='$pass'");
        if ($datos=$sql->fetch_object()) {
            header("location: ./src/vistas/menu.html");
    
        }else {
            // echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            echo '<script>
            Swal.fire({
                icon: "error",
                title: "¡ERROR!",
                text: "Usuario No Autorizado",
                showConfirmButton: true,
                confirmButtonText: "ACEPTAR"
            });
        </script>';
        }
    }
    mysqli_close($conn);
    }
?>


