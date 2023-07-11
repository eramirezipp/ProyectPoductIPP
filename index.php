<!DOCTYPE html>
<html>
  <head>
    <title>Href Attribute Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>LLamadas a function php</h1>
        <form id="form-test" class="form-inline mt-3">
            <label for="number"></label>
            <input type="number" id="number" name ="number" min="1" required>
            <button type="submit">Enviar</button> 
        </form>
    </div>
    <div id="resultado"></div>
    <script>
        $("form-test").submit(function(e){
            e.preventDefault();
            var number_fibonacci = $("#number").val();
            $.ajax({
                type: "POST",
                url : "requesthttp.php",
                data: {numero: number_fibonacci},
                success: function(result){
                    $("resultado").html(result);
                }
            });
        }
        );
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>