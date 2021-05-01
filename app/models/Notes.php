<?php

namespace App\Models;

date_default_timezone_set('America/Sao_Paulo');

use \App\database\ConnectionClass;
use PDO;

class Notes
{

    public function __construct($title = null, $description = null, $finished = false)
    {
        $this->title = $title;
        $this->description = $description;
        $this->finished = $finished;
    }

    // ATTRIBUTES
    public $id;
    public $title;
    public $description;
    public $finished;
    public $moment;

    // METHODS
    public function insertNote()
    {
        $this->moment = date('Y-m-d H:i:s');

        $arrayValues = [
            'title' => "'$this->title'",
            'description' => "'$this->description'",
            'finished' => $this->finished,
            'moment' => "'$this->moment'",
        ];

        $dbInstance = new ConnectionClass('notes');

        $lastID = $dbInstance->insertInDB($arrayValues);
        return $lastID;
    }

    public function retrieveAllNotes()
    {
        return (new ConnectionClass('notes'))->retrieveInDB()->fetchAll(PDO::FETCH_CLASS);
    }

    public function retrieveNote($id)
    {
        return (new ConnectionClass('notes'))->retrieveInDB($id)->fetchObject();
    }

    public function deleteNote($id)
    {
        return (new ConnectionClass('notes'))->deleteInDB($id);
    }

    public function updateNote($id)
    {

        $arrayValues = [
            'title' => $this->title,
            'description' => $this->description,
            'finished' => $this->finished,
        ];

        $dbInstance = new ConnectionClass('notes');

        return $dbInstance->updateInDB($id, $arrayValues);
    }
}
