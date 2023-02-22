<?php
    if(isset($_POST['texte']))
    {
        $texte = stripcslashes($_POST['texte']); //Enleve automatiquement les slashs qui se seraient ajoutés

        $texte = htmlspecialchars($texte); //Rend inoffensives les balises HTML que l'utilisateur a pu rentrer

        $texte = nl2br($texte); //Crée des <br/> pour conserver les retours à la ligne

        $texte = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $texte);
        $texte = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $texte);
        $texte = preg_replace('#\[color=(red|green|blue|yellow|purple|olive)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $texte);
        $texte = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $texte);

        //Affichage du texte
        echo $texte . '<br/><hr/>';
    }   
?>

<p>
    Tapez un exemple en bbCode :
</p>

<form method="post">
    <p>
        <label for="texte">Votre texte ?</label><br/>
        <textarea id="texte" name="texte" cols="50" rows="8"></textarea><br/>
        <input type="submit" value="Valider"/>
    </p>  
</form>