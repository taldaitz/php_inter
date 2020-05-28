<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Formes : </p>

<label>Type : </label>
<select name="type">
    <option>Rectangle</option>
    <option>Cercle</option>
    <option>Triangle</option>
    <option>Carre</option>
</select>

<br/>
<label>Longueur : </label>
<input id="inputLongeur" name="longueur"/>
<br/>
<label>Hauteur : </label>
<input id="inputLargeur" name="hauteur"/>
<br/>
<button>OK</button>


<br/>

<img id="imageForme" src="printImage.php?type=Rectangle" width="200" height="100"/><br/><br/><br/>
    
</body>
</html>
