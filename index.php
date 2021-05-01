<?php

use App\Models\Notes;
include __DIR__ . '/vendor/autoload.php';
define('PAGETITLE', 'Listagem de Notas');

$myNotes = (new Notes())->retrieveAllNotes();

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/main.php';
include __DIR__ . '/includes/footer.php';
