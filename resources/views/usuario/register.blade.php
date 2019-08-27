<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>mueblesRoldan</title>
  </head>
    <body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"><h3>MueblesRoldan<h3></div>
                <div class="col-md-6">
                    <form action="ingresar.php" method="POST">
                        <div class="form-row LoginForm">
                            <div class="form-group col-md-4 Usuario"><input class="form-control inputUsuario" type="text" placeholder="Usuario" name="usuario"></div>
                            <div class="form-group col-md-4 Password"><input class="form-control inputPassword" type="password" placeholder="Contraseña" name="pass"></div>
                            <div class="form-group col-md-4 Submit"><button class="btn btn-warning inputSubmit" type="submit">Ingresar</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <form action="agregar.php" method="POST">
                        <p class="textRegistrar">REGISTRO: </p>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Usuario" name="usuario"></div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Nombre" name="nombre"></div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Correo" name="correo"></div>
                        <div class="form-group"><input class="form-control" type="password" placeholder="Contraseña" name="pass"></div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Telefono" name="telefono"></div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Edad" name="edad"></div>
                        <div class="form-group"><button type="submit" class="btn btn-warning btn-lg btn-block">Registrar</button></div>
                    </form>
                </div>
                <div class="col-md-6 Foto"><img src="{{asset('/imagenes/Muebles.jpg')}}"></div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>