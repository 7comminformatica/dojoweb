<?php
    function BuscarDados(){
        $dados = array();

        $sql = "SELECT * FROM pessoas"; //WHERE `nome` LIKE '$nome'";
        $mysqli = db_connect();
        
        $result = $mysqli->query($sql);

        while ($row = $result->fetch_assoc()) {
            $dados[] = array(
                "nome" => $row['nome'],
                "email" => $row['email'],
                "telefone" => $row['telefone']
            );
        }

        return $dados;
    }
?>