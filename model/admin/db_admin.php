<?php
session_start();
    $statement = $pdo->prepare("SELECT * FROM tasks ");
    $statement->execute();
    $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
