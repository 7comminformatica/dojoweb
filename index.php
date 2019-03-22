<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<div class="container">
	<div class="py-5 text-center">
		<img class="d-block mx-auto mb-4" src="https://i.imgur.com/90e5Ph8.png" alt="Dojo 7COMm">
	</div>
</div>

<div class="container">
	<div class="row justify-content-between mb-3 py-3">
		<div class="col-12 col-md-6 text-center text-md-left">
			<h1>Cadastro de Interesses</h1>
		</div>
		<div class="col-12 col-md-6 text-center text-md-right">
      <a href="javascript:void();" class="btn btn-default btn-ranking btn-lg">Ranking de Interesses</a>
			<a href="form-pessoa.php" class="btn btn-success btn-lg">Novo cadastro</a>
		</div>
	</div>

	<table class="table table-responsive-md">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Interesses</th>
        <th scope="col">Telefone</th>
        <th scope="col">E-mail</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">José Antônio do Nascimento</th>
        <td>PHP, Java, Kotlin</td>
        <td>(11) 99875-6708</td>
        <td>jose.antonio@gmail.com</td>
      </tr>
      <tr>
        <th scope="row">Mariane Souza</th>
        <td>Wordpress, Laravel, C#</td>
        <td>(11) 99578-1546</td>
        <td>masouza@gmail.com</td>
      </tr>
      <tr>
        <th scope="row">Geraldo Monteiro</th>
        <td>.NET, C#, PHP</td>
        <td>(11) 98716-7898</td>
        <td>gemonteiro@gmail.com</td>
      </tr>
    </tbody>
  </table>

  <div class="row justify-content-end mt-5">
    <div class="col-12 col-md-5">
      <h3 class="mb-4">Ranking de Interesses</h3>
      <table class="table table-responsive-md">
        <thead>
          <tr>
            <th scope="col">Posição</th>
            <th scope="col">Título</th>
            <th scope="col">Qtd.</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1º</th>
            <td><strong>PHP</strong></td>
            <td>15</td>
          </tr>
          <tr>
            <th scope="row">2º</th>
            <td><strong>Laravel</strong></td>
            <td>14</td>
          </tr>
          <tr>
            <th scope="row">3º</th>
            <td><strong>.NET</strong></td>
            <td>12</td>
          </tr>
          <tr>
            <th scope="row">4º</th>
            <td><strong>Java</strong></td>
            <td>10</td>
          </tr>
          <tr>
            <th scope="row">5º</th>
            <td><strong>C#</strong></td>
            <td>7</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>