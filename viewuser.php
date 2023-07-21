<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
        require_once "UserProcess.php";
        $userProcess = new UserProcess();
        if (isset($_POST['Getdata'])){
            $userdata = $userProcess->readUser($_POST['IDuser']);
            echo "<p class='mt-2'> Nombre: ".$userdata['name']."</p>";
        }
        ?>
        <form method="post" action="" class="form-group">
            <h2>Get data base</h2>
            <label for="IDuser">ID del usuario: </label>
            <input type="text" id="IDuser" name="IDuser" class = "form-control">
            <input type="submit" name="Getdata" value="leer usuario" class = "btn btn-primary mt2">
        </form>    
        <?php
        require_once "UserProcess.php";
        $userProcess = new UserProcess();
        if (isset($_POST['RegisterUser'])){
            $userdata = $userProcess->insertUser($_POST['IDName'], $_POST['IDEmail']);
            echo "<p class='mt-2'> ok</p>";
        }
        ?>
        <form method="post" action="" class="form-group">
            <h2>Registrar usuario</h2>
            <label for="IDName">Nombre: </label>
            <input type="text" id="IDName" name="IDName" class = "form-control">
            <label for="IDEmail">Email: </label>
            <input type="text" id="IDEmail" name="IDEmail" class = "form-control">
            <input type="submit" name="RegisterUser" value="Registrar usuario" class = "btn btn-primary mt2">
        </form>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>