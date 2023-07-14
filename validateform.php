<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
        $errorNombre = $errorEmail = "";
        $nombre = $email = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["nombre"])) {
            $errorNombre = "Se requiere nombre";
          } else {
            $nombre = validar_entrada($_POST["nombre"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$nombre)) {
              $errorNombre = "Sólo se permiten letras y espacios en blanco";
            }
          }
          
          if (empty($_POST["email"])) {
            $errorEmail = "Se requiere email";
          } else {
            $email = validar_entrada($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $errorEmail = "Formato de email inválido";
            }
          }
        }

        function validar_entrada($datos) {
          $datos = trim($datos);
          $datos = stripslashes($datos);
          $datos = htmlspecialchars($datos);
          return $datos;
        }
        ?>

        <h2>Ejemplo de Validación de Formulario en PHP</h2>
        <p><span class="error">* campo requerido</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control">
            <span class="error">* <?php echo $errorNombre;?></span>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" class="form-control">
            <span class="error">* <?php echo $errorEmail;?></span>
          </div>
          <input type="submit" name="submit" value="Enviar" class="btn btn-primary">  
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>