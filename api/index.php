<?php
if (sizeof($_POST)) {
  die(json_encode(['Resposta do arquivo .php', '_POST' => $_POST, '_FILES' => $_FILES]));
}
die(json_encode('Nada foi postado.'));
