<?php 
      
         require "template/database.php";
      
         $requete = $database->prepare('SELECT * FROM * tweet WHERE tweet LIKE %nouriture%');

         $requete->execute();

         $searchTweet = $requete->fetchAll(PDO::FETCH_ASSOC);
      ?>


      <?php foreach($searchTweet as $stw) { ?>
            <div class="info">
                <h1> <?= $stw['pseudo'] ?> </h1>
      <?php } ?>



        <form action="recherche.php" class="recherche">
            <input type="text" name="recherche" placeholder="rechercher un tweet">
            <button type="submit">rechercher</button>
        </form>
