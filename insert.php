<?php
include __DIR__ . '/vendor/autoload.php';

define('PAGETITLE', 'Cadastrar Nota');
define('PAGE', 'insert');

use \App\Models\Notes;

if (isset($_POST['titleNote'], $_POST['descriptionNote'])) {

    $myNote = new Notes($_POST['titleNote'], $_POST['descriptionNote'], isset($_POST['finishedNote']) ? 1 : 0);
    $lastID = $myNote->insertNote();

    header('location: index.php?message=true');
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
