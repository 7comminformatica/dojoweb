<?php
require_once("head.php");
require_once("header2.php");
?>
<div class="container">
    <div class="row">
        <div class="col-6">
        <h1>Cadastro de Interesses</h1>
        </div>
        <div class="col-6">
        <button type="button" class="btn btn-secondary">Ranking De interesses</button>
        <button type="botton" class="btn btn-primary">Novo Cadastro</button>
        </div>
    </div>
    <div class="row">
            <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">nome</th>
                <th scope="col">Interesses</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
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
<?php
require_once("footer2.php")
?>