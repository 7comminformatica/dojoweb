<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../css/es">
    <title>cadastrar</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <h2><a class="title" href="index.php">7comm</a></h2> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<div class="container">
<div class="row"></div>
    <h1>Novo cadastro</h1>
    <form action="">
        <div class="row">
            <div class="col-6">
                <h2>dados pessoais</h2>
                <div class="">
                    <label action="">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" placeholder="nome completo" name="nome" required>
                </div>
                <h2>Email</h2>
                <div class="form-grup">
                    <label action="">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="E-Mail" name="email" required>
                </div>
                <h2>Email</h2>
                <div class="form-grup">
                    <label action="">Telefone</label>
                    <input type="tel" class="form-control" id="tel" placeholder="(21)-9999--999" name="telefone" required>
                </div>
            </div>
                <div class="col-6">
                        <h2>Interesses</h2>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="1" for="cursoEscolhido_1" type="checkbox"> PHP
                    </label>
                    </div>
                        <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="2" for="cursoEscolhido_2" type="checkbox">Laravel
                        </label>
                    </div>    
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="3"  for="cursoEscolhido_3" type="checkbox">Wordpress
                        </label>
                    </div> 
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="4"  for="cursoEscolhido_4" type="checkbox">#C
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="5"  for="cursoEscolhido_5" type="checkbox">MySQL
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="6"  for="cursoEscolhido_6" type="checkbox">.NET
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="7" for="cursoEscolhido_7" type="checkbox">Java
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="8" for="cursoEscolhido_8" type="checkbox">React
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="9" for="cursoEscolhido_9" type="checkbox">Angular
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="10"  for="cursoEscolhido_10" type="checkbox">Vue JS
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="11" for="cursoEscolhido_11" type="checkbox">three.js
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="12" for="cursoEscolhido_12" type="checkbox">Blockchain
                        </label>
                    </div>
                    <button type="button" class="btn btn-secondary">cancelar</button>
                    <button type="botton" class="btn btn-primary">Enviar</button>
                    
                    
            </div>

    </div>
    </form>
</div>
<div class="row"> </div>
<footer class="navbar navbar-expand-md navbar-dark bg-dark">

    <div class="footer-copyright text-center py-3">
    © 2019 7comm:
    </div>
</footer>
</body>
</html>