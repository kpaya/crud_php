<?php
include __DIR__ . '/vendor/autoload.php';

use \App\Models\Notes;

define('PAGETITLE', 'Exibir Nota');
define('PAGE', 'show');


if ($_GET['id'] !== null && is_numeric($_GET['id'])) {
    $noteRetrieved = (new Notes())->retrieveNote($_GET['id']);
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
