<?php
require_once("head.php");
require_once("header2.php");
?>
<body>
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
<?php
require_once("footer2.php")
?>
