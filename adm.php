<?php

$db = new SQLite3('db.sql');

$nome = $_GET['nome'];
$senha = $_GET['senha'];

$result = $db->query("SELECT * FROM ADMS WHERE NOME = '$nome' AND SENHA = '$senha';");

$l = $result->fetchArray();

if ($l != null) {
  header('Location: /acessoadmin.html');
} else {
  header('Location: /loginadmin.html');
}