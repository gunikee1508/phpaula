<?php

require_once("config.php");
$sql = new Sql(); // ele sabe encontrar a classe, encontraar a classe Sql que tá lá em sql.php
$usuarios = $sql->select("SELECT * FROM tb_usuarios"); // achando sql, já posso jogar o comando no banco de dados. o retorno jogo tudo na variavel $usuarios.
echo json_encode($usuarios); 

?>