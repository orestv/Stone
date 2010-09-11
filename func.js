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

function hideAllPopups()
{
    var dvMenu = document.getElementById('menuPopupContainer');
    if (dvMenu.hasChildNodes())
    {
        var x;
        for (x = 0; x < dvMenu.childNodes.length; x++)
        {
            //dvMenu.childNodes[x].style.visibility = 'hidden';
            dvMenu.childNodes[x].style.display = 'none';
        }
    }

}

function showPopup(popup)
{
    hideAllPopups();
    //popup.style.visibility = 'visible';
    popup.style.display = 'block';
    fadeIn(popup.id, 0.);
}

function fadeIn(id, opacity)
{
   if (opacity < 1.)
   {
       document.getElementById(id).style.opacity = String(opacity);
       setTimeout('fadeIn(\'' + id + '\', ' + String(opacity+0.1) + ');', 50);
   }
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
