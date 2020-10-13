<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

require_once '../../classes/autoload.php';

$deleteContato = new Contato();
$deleteContato->delete($id);