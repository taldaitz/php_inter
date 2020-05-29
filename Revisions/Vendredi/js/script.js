function agrandissement() {
    var cible = document.getElementById('cible');
    var width = parseInt(cible.style.width.replace('px', ''));
    width += 20;
    cible.style.width = width + 'px'; 
}



var widthCible = 200;
function agrandissement2() {
    widthCible += 20;
    document.getElementById('cible').style.width = widthCible + 'px'; 
}