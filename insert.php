<?php

require 'template/database.php';

$insertion = $database->prepare("INSERT INTO fiche (Pseudo, nom, mail, MDP, photo ) Values (:Pseudo, :nom, :mail, :MDP, :photo)");
$insertion->execute(
    [
        "Pseudo" => $_POST['Pseudo'],
        "nom" => $_POST['nom'],
        "mail" => $_POST['mail'],
        "MDP" => $_POST['MDP'],
        "photo" => $_POST['photo']
    ]
);

header("Location: fichetw.php");
