function createRequestObject()
{
    var xmlhttp;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xmlhttp;
}

function setMenu()
{
    var nav = document.getElementById('navigation');
    var request = createRequestObject();
    request.onreadystatechange = function(){
        if (request.readyState == 4)
        {
            nav.innerHTML = request.responseText;
        }
    }
    request.open('GET', 'navigation.html', true);
    request.send(null);
}
