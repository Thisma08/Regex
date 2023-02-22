<p>
    <?php
        if(isset($_POST['mail']))
        {
            $_POST['mail'] = htmlspecialchars($_POST['mail']);

            if(preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['mail']))
            {
                echo "L'adresse ".$_POST['mail']." est valide.";
            }
            else
            {
                echo "L'adresse ".$_POST['mail']." est invalide.";
            }
        }   
    ?>
</p>

<form method="post">
    <P>
        <label for="mail">Entrez un mail :</label><br/>
        <input id="mail" name="mail"/><br/>
        <input type="submit" value="Vérifier le mail"/>
    </p>
</form>

#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#