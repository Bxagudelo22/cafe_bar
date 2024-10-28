<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'menu.php'; ?>
<div class="row">
    <div class="col-12 col-md-6">

    <img src="img/about.png" alt="">
</div>
<div class="col-12 col-md-6">
    <h2>INICIAR SESION</h2>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre De Usuario</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre Usuario">
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Mostrar contraseña</label>
  </div>
</form>
<div class="ent-md-endd-grid gap-2 d-md-flex justify-cont">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="submit">Enviar</button>
                  <button type="reset">Borrar</button>
                </div><br>
                <p>Si no estas registrado ,haz click <a href="form_registrarse.php">!Aqui¡</a></p>
              </br>

</body>
</html>