function changerDimensionsImage() {
    var longueur = document.getElementById('inputLongeur').value;
    var hauteur = document.getElementById('inputHauteur').value;

    var image = document.getElementById('imageForme');
    image.setAttribute('width', longueur);
    image.setAttribute('height', hauteur);

}


function changerTypeImage() {
    var type = document.getElementById('selectType').value;
    var path = "printImage.php?type=";

    document.getElementById('imageForme').setAttribute('src', path + type);
}