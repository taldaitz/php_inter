<?php
session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lancer le combat</title>
</head>
<body>


    <form action="visuCombat.php" method="POST">

        <p>
            <label>Combattant 1 : </label>
            <input name="nomCombattantUn"/>
            <select name="typeCombattantUn">
                <option>Guerrier</option>
                <option>Magicien</option>
            </select>
        </p>

        <p>
            <label>Combattant 2 : </label>
            <input name="nomCombattantDeux"/>
            <select name="typeCombattantDeux">
                <option>Guerrier</option>
                <option>Magicien</option>
            </select>
        </p>

        <input type="submit" value="Lancer le combat !"/>

    </form>
    
</body>
</html>