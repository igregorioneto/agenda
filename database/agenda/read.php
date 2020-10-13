<?php

$search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_SPECIAL_CHARS);

require_once '../classes/autoload.php';

$readContato = new Contato();
$readContato->read($search);