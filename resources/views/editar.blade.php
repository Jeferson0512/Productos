<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="http://gestorlaravel.com/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://gestorlaravel.com/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">{{$editar->nombre}}</h1>
          <div class="list-group">
            <a href="productos/{{$editar->id}}/edit" class="list-group-item">Guardar</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
          <br><br>
          <form class="form-horizontal" role="form" method="POST" action="/auth/register">
  						<input type="hidden" name="_token" value="{{ csrf_token() }}">

  						<div class="form-group">
  							<label class="col-md-4 control-label">Nombre</label>
  							<div class="col-md-6">
  								<input type="text" class="form-control" name="name" value="{{$editar->nombre}}">
  							</div>
  						</div>

  						<div class="form-group">
  							<label class="col-md-4 control-label">Estado</label>
  							<div class="col-md-6">
  								<input type="number" class="form-control" name="name" value="{{$editar->estado}}" disabled>
  							</div>
  						</div>

  						<div class="form-group">
  							<label class="col-md-4 control-label">Descripcion</label>
  							<div class="col-md-6">
  								<input type="text" class="form-control" name="name" value="{{$editar->descripcion}}">
  							</div>
  						</div>

  						<div class="form-group">
  							<div class="col-md-6 col-md-offset-4">
  								<button type="submit" class="btn btn-primary">
  									Editar
  								</button>
  							</div>
  						</div>
  					</form>
          <!-- /.row -->
<br><br><br><br>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="http://gestorlaravel.com/js/jquery.min.js"></script>
    <script src="http://gestorlaravel.com/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
