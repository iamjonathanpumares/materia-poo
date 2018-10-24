<?php

echo $_SERVER['REQUEST_METHOD'] . '<br>';

// Comprueba que el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  // Se obtienen los datos del formulario
  $title = trim($_POST['title']); // Obligatorio
  // var_dump($title);
  $description = trim($_POST['description']); // Opcional

  // Validar los datos enviados
  if (empty($title))
  {
    echo 'El título esta vacio';
  }
  else
  {
    $title = filter_var($title, FILTER_SANITIZE_STRING);
    echo 'Si hay datos <br>';
    echo $title . '<br>';
  }
  
} 

echo '<pre>';
var_dump($_GET);
echo '</pre>';

echo '<pre>';
var_dump($_POST);
echo '</pre>';



?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Add Job</title>
  </head>
  <body>
    <div class="container">
      <h1>Add Job</h1>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group">
          <label for="id_title">Title</label>
          <input type="text" required name="title" class="form-control" id="id_title" placeholder="Enter title">
        </div>
        <div class="form-group">
          <label for="id_description">Description</label>
          <input type="text" name="description" class="form-control" id="id_description" placeholder="Description">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>