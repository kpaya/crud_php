<?php
include __DIR__ . '/vendor/autoload.php';

use \App\Models\Notes;

define('PAGETITLE', 'Alterar Nota');
define('PAGE', 'update');

if ($_GET['id'] !== null && is_numeric($_GET['id'])) {

    $noteRetrieved = (new Notes())->retrieveNote($_GET['id']);

    if (isset($_POST['titleNote'], $_POST['descriptionNote'])) {
        $noteToUpdate = new Notes($_POST['titleNote'], $_POST['descriptionNote'], isset($_POST['finishedNote']) ? 1 : 0);
        $noteToUpdate->updateNote($noteRetrieved->id);
        
        header('location: index.php?message=true');
    }
} else {
    header('location: index.php?message=false');
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
