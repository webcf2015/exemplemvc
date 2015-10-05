<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Notre livre d'or</title>
    </head>
    <body>
        <h2>Notre livre d'or</h2>
        <div class="content"> <a href="?deconnect">Se déconnecter</a>


            <div id='leform'>
                <form action="" method="POST" name="nom">
                    Votre nom : <input name="tabUp[lenom]" type="text" value='<?php echo $affiche->lenom ?>' /><br/>
                    Votre message : <textarea name='tabUp[letexte]'><?php echo $affiche->letexte ?></textarea><br/>
                    <input type="text" name='tabUp[ladate]' value='<?php echo $affiche->letexte ?>'>

                    <input type="submit" value='Envoyer'/>
                </form>
            </div>
        </div>
    </body>
</html>
