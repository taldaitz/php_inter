var nbTour = 0;


function refreshFighters() {
    $('#menuPersoA').load('PersoA.php');
    $('#menuPersoB').load('PersoB.php');
}

$(document).ready(function() {

    $('#fightButton').click(function() {

        $('#sectionCombat').prepend('<p id="logCombat' + nbTour + '"></p>');

        $('#logCombat' + nbTour).load("logCombat.php"); 

        $('#logCombat' + nbTour).fadeIn('slow'); 

        refreshFighters();

        nbTour++;

    });

});