<?php

$db = new SQLite3('db.sql');

$nome = $_GET['nome'];
$senha = $_GET['senha'];

$result = $db->query("SELECT * FROM CLIENTS WHERE NOME = '$nome' AND SENHA = '$senha';");

$l = $result->fetchArray();

if ($l != null) {
  header('Location: /acessocliente.html');
} else {
  header('Location: /index.html');
}