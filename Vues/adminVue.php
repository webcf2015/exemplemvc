<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Notre livre d'or</title>
        
        <script src="Vues/js/sup.js"></script>     
    </head>
    <body>
        <h2>Notre livre d'or</h2>
        <div class="content"> <a href="?deconnect">Se déconnecter</a>
            <?php
            /* Dans cette vue 
             * 	l'admin voit tous les commentaires
             *  + 2 liens pour Modifier et Supprimer
             *  + il peut se déconnecter
             */
            if (!$recup_tous) {
                ?>
                <h3>Pas encore de commentaire !</h3> 
                <?php
            } else {
                foreach ($recup_tous AS $valeur) {
                    ?>
                    <div class='commentaire'>
                        <h3>Par : <?php echo $valeur->lenom ?></h3>
                        <h4>Le <?php echo $valeur->ladate ?></h4>
                        <p><?php echo $valeur->letexte ?></p>
                        <p><img src="Vues/img/modif.png" alt="Modifier" onclick="window.location.href = '?modif=<?php echo $valeur->id ?>'" /> | <img src="Vues/img/sup.png" alt="Supprimer" onclick="sup(<?php echo $valeur->id ?>)" /></p>
                        <hr/>
                    </div>
                    <?php
                }
            }
            ?>


        </div>
    </body>
</html>
