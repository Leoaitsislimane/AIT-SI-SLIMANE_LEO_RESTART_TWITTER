<?php

require 'template/database.php';

$insertion = $database->prepare("INSERT INTO tweet (tweet) Value (:tweet)");
$insertion->execute(
    [
        "tweet" => $_POST['tweet'],
    ]
);

header("Location: tweet.php");