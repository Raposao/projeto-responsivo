<?php
	include("cabecalho.php");
	?>
	
	<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Login</h2>
      
      </div>
      </div>
      </div>
    
<html lang="en">
<head>
  <title>REGISTRO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>REGISTRAR-SE</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="Nome">Úsuario:</label>
      <input type="Nome" class="form-control" id="Nome" placeholder="Enter Nome" name="Nome">
    </div>
    <div class="form-group">
      <label for="Sna">Senha:</label>
      <input type="Senha" class="form-control" id="Sna" placeholder="Enter Senha" name="Sna">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

</body>
</html>