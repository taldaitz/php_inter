<?php
    $type = isset($_POST['type']) ? $_POST['type'] : 'Rectangle';
    $longueur = isset($_POST['longueur']) ? $_POST['longueur'] : '200';
    $hauteur = isset($_POST['hauteur']) ? $_POST['hauteur'] : '200';

    $sourceImage = 'printImage.php?type=' . $type . '&longueur=' . $longueur . '&hauteur=' . $hauteur;
?>

<p>Formes : </p>

<form method="POST">
    <label>Type : </label>
    <select name="type">
        <option>Rectangle</option>
        <option>Cercle</option>
        <option>Triangle</option>
        <option>Carre</option>
    </select>
    <br/>
    <label>Longueur : </label>
    <input name="longueur"/>
    <br/>
    <label>Hauteur : </label>
    <input name="hauteur"/>
    <br/>
    <input type="submit" value="OK"/>
</form>




<br/>

<img src="<?php echo $sourceImage; ?>"/><br/><br/><br/>
