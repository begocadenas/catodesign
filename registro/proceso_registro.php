<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Procesador formulario/CATO DESIGN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./../assets/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="./../assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./../assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./../assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="./../assets/favicon_io/site.webmanifest">
</head>

<body>
<?php
  $conexion_base_datos = mysqli_connect("localhost", "root", null, "mi_club");
  if (mysqli_connect_errno()){
      echo "no se ha podido establecer conexión";
      exit ();
  }
  ?>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container">
            <a class="cato" href="./../index.html"><img class="tipo" src="./../assets/img/tipologo.png" alt="CATO DESIGN"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" id="ir" href="./../proyectos/proyectos.html">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="ir" href="./../noticias/noticias.html">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="ir" href="./../contacto/contacto.html">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="ir-act" href="./formulario.html">Registro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<section id="resultado">
<div class="form-result">
    
<?php
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $email=$_POST["email"];

    //comprobamos que no este dado de alta previamente
    $query = "select * from socios2 where email='".$email."'";
    $personas_con_email_tal=mysqli_query($conexion_base_datos, $query);

    if ($nombre==""){
        echo "por favor introduce un nombre";
        ?>
        <a id="link" href ="./formulario.html">Volver al fomulario</a>
        <?php
        exit();
    }

    if ($apellidos==""){
        echo "por favor introduce tus apellidos";
        ?>
        <a id="link" href ="./formulario.html">Volver al fomulario</a>
        <?php
        exit();
    }

    if ($email==""){
        echo "por favor introduce tu email";
        ?>
        <a id="link" href ="./formulario.html">Volver al fomulario</a>
        <?php
        exit();
    }

    if(mysqli_num_rows($personas_con_email_tal)>0){
        echo "Ya estas registrado ".$email."<br>";
    }

    else {
        $query= "INSERT INTO socios2 (nombre, apellidos, email) VALUES ('$nombre', '$apellidos', '$email');" ;
        $registrar= mysqli_query ($conexion_base_datos, $query);
        echo "¡Bienvenido a CATO DESIGN!";
    }
    ?>

</div>
</section>

    </body>
    </html>