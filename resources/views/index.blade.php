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
    <div class="row">
        <div class="col-6">
        <h1>Cadastro de Interesses</h1>
        </div>
        <div class="col-6">
        <button type="button" class="btn btn-secondary">Ranking De interesses</button>
        <a href="{{ url('cadastro') }}" type="botton" class="btn btn-primary" href="">Novo Cadastro</a>
        </div>
    </div>
    <div class="row">
            <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pessoas as $pessoa)
            <tr>
                <th scope="row">{{ $pessoa->id }}</th>
                <td>{{ $pessoa->nome }}</td>
                <td>{{ $pessoa->email }}</td>
                <td>{{ $pessoa->telefone }}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    <div class="row">
    <div class="col-6"> </div>
    <div class=col-6>
            <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Posição</th>
                <th scope="col">Título</th>
                <th scope="col">Qtd.</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1º</th>
                <td>Mark</td>
                <td>Otto</td>
            </tr>
            <tr>
                <th scope="row">2º</th>
                <td>Jacob</td>
                <td>Thornton</td>
            </tr>
            <tr>
                <th scope="row">3º</th>
                <td>Larry</td>
                <td>the Bird</td>
            </tr>
            <tr>
                <th scope="row">4º</th>
                <td>Larry</td>
                <td>the Bird</td>
            </tr>
            <tr>
                <th scope="row">5º</th>
                <td>Larry</td>
                <td>the Bird</td>
            </tr>
        </tbody>
        </table>
    
    </div>
    </div>
</div>
<div class="row"> </div>
<footer class="page-foooter font-small bg-dark">

    <div class="footer-copyright text-center py-3">
    © 2019 7comm:
    </div>
</footer>
</body>
</html>