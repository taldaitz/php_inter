var nbContent = 0;

$(document).ready(function() {

    $('button').click(function (){
        nbContent++;

        $('#articles').prepend('<p id="paraArticle' + nbContent + '"></p>');

        $('#paraArticle' + nbContent).load("content/" + this.id + '.txt'); 

        $('#paraArticle' + nbContent).fadeIn("slow");
    });
    
});