<?php

namespace App\database;

use PDO;
use PDOException;

class ConnectionClass
{
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
    }

    public $tableName;

    // Abre a conexão com o DB
    public function openDbConnection()
    {
        try {
            $pdoInstace = new PDO('mysql:host=localhost;dbname=notes_crud', 'root', '');
            $pdoInstace->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdoInstace;
        } catch (PDOException $error) {
            return $error->getMessage();
        }
    }

    // Efetiva a execução da consulta no DB
    public function executeDB($queryValues = [], $query)
    {
        try {
            $connectionWithDB = $this->openDbConnection();
            $newState = $connectionWithDB->prepare($query);
            $newState->execute($queryValues);
            return $newState;
        } catch (\PDOException $error) {
            return $error->getMessage();
        }
    }

    // Montagem da Inserção no DB
    public function insertInDB($valuesList)
    {
        $valuesKey = array_keys($valuesList);
        $values = array_pad($valuesList, count($valuesKey), '');
        $query = 'INSERT INTO ' . $this->tableName . ' (' . implode(', ', $valuesKey) . ') VALUES ' . '(' . implode(', ', $values) . ')';

        try {
            $newState = $this->executeDB($values, $query);
            return $newState;
        } catch (PDOException $error) {
            return $error->getMessage();
        }
    }

    // Montagem da Consulta no DB
    public function retrieveInDB($id = '')
    {
        $query = !strlen($id) ? 'SELECT * FROM ' . $this->tableName . ' ORDER BY finished, moment DESC' : 'SELECT * FROM ' . $this->tableName . ' WHERE id = ' . $id;

        try {
            return $this->executeDB([], $query);
        } catch (\PDOException $error) {
            $error->getMessage();
        }
    }


    // Montagem o delete no DB
    public function deleteInDB($id = '')
    {
        $query = 'DELETE FROM ' . $this->tableName . ' WHERE id = ' . $id;

        try {
            return $this->executeDB([], $query);
        } catch (\PDOException $error) {
            $error->getMessage();
        }
    }

    // Montagem da Inserção no DB
    public function updateInDB($id, $valuesList)
    {
        $valuesKey = array_keys($valuesList);
        $values = array_pad($valuesList, count($valuesKey), '?');
        $query = 'UPDATE ' . $this->tableName . ' SET ' . implode('= ?, ', $valuesKey) . '= ? WHERE id = ' . $id;
        try {
            $this->executeDB(array_values($values), $query);
            return true;
        } catch (PDOException $error) {
            return $error->getMessage();
        }
    }
}
