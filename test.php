<html>

<head>
    <title>PHP Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="style.css">
    </link>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light -bf-light">
        <a class="navbar-brand" href="s">Cursos online</a>
    </nav>
    <div class="container mt-4">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Nombre</th>
                    <th>Drescripcion</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ListadoCurso = [
                    ["nombre" => "Proyecto administrativo", "Descripcion" => "text text text", "Precio" => "23", "Categoria" => "Negocio"],
                    ["nombre" => "Proyecto5 administrativo", "Descripcion" => "text text text", "Precio" => "23", "Categoria" => "Negocio"],
                    ["nombre" => "Proyecto4 administrativo", "Descripcion" => "text text text", "Precio" => "23", "Categoria" => "Negocio"],
                    ["nombre" => "Proyecto3 administrativo", "Descripcion" => "text text text", "Precio" => "23", "Categoria" => "Negocio"],
                    ["nombre" => "Proyecto2 administrativo", "Descripcion" => "text text text", "Precio" => "23", "Categoria" => "Negocio"],
                ];
                foreach ($ListadoCurso as $curso) {
                    echo "<tr>";
                    echo "<td>" . $curso["nombre"] . "</td>";
                    echo "<td>" . $curso["Descripcion"] . "</td>";
                    echo "<td>" . $curso["Precio"] . "</td>";
                    echo "<td>" . $curso["Categoria"] . "</td>";
                    echo "</tr>";
                    # code...
                }
                ?>
            </tbody>
        </table>
        <?php
        $directorio = "./media/*.jpg";
        $imagenes = glob($directorio);
        foreach ($imagenes as $imagen) {
            echo '<img src="' . $imagen . '" alt="Imagen" /><br />';
        }
        ?>

    </div>
    <div class="container">
    <form class="row g-3" method="post">
        <div class = "mt-3">
            <label for="num" class="mr-2">Ingrese su numero de comienzo:</label>
            <input type="number" id="num" name="num" min="1" class="form-control mr-2">
            <input type="submit" value="Generar secuencia" class="btn btn-primary">
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        function fibonacci($num)
        {
            $num_1 = 0;
            $num_2 = 1;
            $i = 0;
            echo '<p class="mt-3">Secuencia de fibonacci:';
            while ($i <= $num) {
                echo "" . $num_1.",";
                $num_3 = $num_2 + $num_1;
                $num_1 = $num_2;
                $num_2 = $num_3;
                $i++;
            }
            echo "</p>";
        }
        fibonacci($num);
    }
    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
</body>

</html>