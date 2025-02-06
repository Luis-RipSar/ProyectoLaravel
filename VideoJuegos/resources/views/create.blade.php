<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h3">Añadir Juegos</h1>
  </div>
  <div id="contenido">
    <form id="formulario" action="index.php?tabla=user&accion=guardar&evento=crear" method="POST">
      <div class="form-group">
        <label for="juego">Juego </label>
        <input type="text" required class="form-control" id="juego" name="juego" value="<?= $_SESSION["datos"]["juego"] ?? "" ?>" aria-describedby="juego" placeholder="Introduce juego">
        <small id="juego" class="form-text text-muted">Compartir tu juego lo hace menos seguro.</small>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" required class="form-control" id="password" name="password" value="<?= $_SESSION["datos"]["password"] ?? "" ?>" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="name">Nombre </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Introduce tu Nombre" value="<?= $_SESSION["datos"]["name"] ?? "" ?>">
      </div>
      <div class="form-group">
        <label for="email">email </label>
        <input type="text" class="form-control" id="email" name="email" value="<?= $_SESSION["datos"]["email"] ?? "" ?>" placeholder="Introduce tu email">
      </div>
      <button id="guardar" type="submit" class="btn btn-primary">Guardar</button>
      <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>
  </div>
</main>
</body>
</html>