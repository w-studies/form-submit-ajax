<?php
if (sizeof($_POST)) {

  extract($_POST);

  // montar uma query
  $query = "insert into table(title, description, file_name) values ('$title', '$description', '{$_FILES['photo']['name']}')";

  die(json_encode([
    'Resposta do arquivo .php',
    '_POST' => $_POST,
    '_FILES' => $_FILES,
    'query' => $query

  ]));
}
die(json_encode('Nada foi postado.'));
