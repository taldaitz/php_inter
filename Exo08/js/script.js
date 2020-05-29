function getXhr () {
    // XML Http Request
    var xhr = "";

    if(window.XMLHttpRequest){	// Firefox, Chrome, Safari, Opera
        xhr = new XMLHttpRequest();
        console.log("XMLHttpRequest");
    }else if(window.ActivXObject){	// IE
        try{
            xhr = new ActivXObject("Msxml2.XMLHTTP");
            console.log("Msxml2.XMLHTTP");
        }catch(e){
            xhr = new ActivXObject("Microsoft.XMLHTTP");
            console.log("Microsoft");
        }
    }else{
        xhr = false;
    }

    return xhr;
}


function loadArticle(element) {

    var xhr = getXhr();

    xhr.open("GET", 'content/' + element.id + '.txt', true);
    xhr.send();


    xhr.onreadystatechange = function () {
        if (xhr.readyState==4 && xhr.status==200) {
            document.getElementById('content').innerHTML = xhr.response;
        }
    }   
}