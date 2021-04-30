<?php
    class ConnectionClass{

        function connectDB(){
            try {
                $connection = new PDO("mysql:host=localhost;dbname=notes_crud", "root", "");
                return $connection;
            } catch (PDOException $error) {
                return $error->getMessage();
            }
        }
    }
?>