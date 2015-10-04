<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Notre livre d'or</title>
    </head>
    <body>
        <h2>Notre livre d'or</h2>
        <div class="content"> <a href="?deconnect">Se déconnecter</a>
            <?php
            /* Dans cette vue 
             *	l'admin voit tous les commentaires
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
                        <p><a href="?modif">Modifier</a> | <a href="?sup">Supprimer</a></p>
                        <hr/>
                    </div>
                    <?php
                }
            }
            ?>
            <div id='monform'>
                <h2>Envie de laisser un nouveau commentaire? <h2>
                        <form action="" method="POST" name="nom">
                            Votre nom : <input name="tab[lenom]" type="text" required /><br/>
                            Votre message : <textarea name='tab[letexte]' required></textarea><br/>
                            <input type="hidden" name='tab[ladate]' value='<?php echo $ladate ?>'>
                            <input type="submit" value='Envoyer'/>
            </div>
         </div>
     </body>
</html>
