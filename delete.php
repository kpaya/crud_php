<?php
include __DIR__ . '/vendor/autoload.php';

use \App\Models\Notes;

define('TITLE', 'Alterar Nota');

if ($_GET['id'] !== null && is_numeric($_GET['id'])) {

    $myNote = new Notes();
    $note = $myNote->deleteNote($_GET['id']);

    header('location: index.php?message=true');
}else{
    header('location: index.php?message=false');
}