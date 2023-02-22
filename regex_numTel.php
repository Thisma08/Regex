<p>
    <?php
        if(isset($_POST['telephone']))
        {
            $_POST['telephone'] = htmlspecialchars($_POST['telephone']);

            if(preg_match('#^0[1-68]([-. ]?[0-9]{2}){4}$#', $_POST['telephone']))
            {
                echo 'Le '.$_POST['telephone'].' est valide.';
            }
            else
            {
                echo 'Le '.$_POST['telephone'].' est invalide.';
            }
        }   
    ?>
</p>

<form method="post">
    <P>
        <label for="telephone">Entrez un numéro de téléphone :</label><br/>
        <input id="telephone" name="telephone"/><br/>
        <input type="submit" value="Vérifier le numéro"/>
    </p>
</form>