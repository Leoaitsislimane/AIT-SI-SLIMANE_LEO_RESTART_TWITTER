<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
    

    <?php require "template/database.php"; ?>


    <?php
    $requete = $database->prepare("SELECT * FROM tweet");

$requete->execute();

$tweet = $requete->fetchAll(PDO::FETCH_ASSOC);
?>

<h1 class="tit">écrivez un Tweet!</h1>
        
         <?php foreach($tweet as $twt) { ?>
            <div class="info">
              <p>Tweet : <?= $twt['tweet'] ?> </p>
              <form action="delete.php" method="POST">
                    <input type="hidden" name="supp" Value="<?= $twt['id'] ?>">
                    <button type="submit">Supp</button>
              </form>
            </div>
         <?php } ?>

        <form class="twit" method="POST" action="insert2.php">
            <input type="text" name="tweet" placeholder="Tweeter" >

            <button type="submit">partager</button>
        </form>
    </main>
    
</body>
</html>

