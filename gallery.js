nCurrentId = 0;
nMaxIds = 34;

function show(id)
{
    nCurrentId = Number(id);
    document.getElementById('greyBackground').style.visibility='visible';
    document.getElementById('largeView').style.visibility='visible';
    document.getElementById('imgView').src = generateSampleString(nCurrentId);
    updateCounter(nCurrentId, nMaxIds);
}

function hide()
{
    document.getElementById('greyBackground').style.visibility='hidden';
    document.getElementById('largeView').style.visibility='hidden';
    //document.getElementById('imgView').src = generateSampleString(id);
}

function move(direction)
{
    switch (direction)
    {
        case 1:
            nCurrentId += 1;
            break;
        case -1:
            nCurrentId -= 1;
            break;
    }
    nCurrentId = (nCurrentId + nMaxIds) % nMaxIds;
    show(nCurrentId);
}

function updateCounter(id, maxid)
{
   var dvStatus = document.getElementById('dvStatus');
   dvStatus.innerHTML = '<i>'+(id+1)+'</i> из <i>'+(maxid+1)+'</i>';
}

function generateList()
{
    var strUrl, div, img, centerDoc;
    centerDoc = document.getElementById('centerDoc');
    for (var i = 0; i <= nMaxIds; i++)
    {
        div = document.createElement('div');
        img = document.createElement('img');
        div.setAttribute('class', 'galleryItem');
        div.className = 'galleryItem';
        div.style.border = '3px inset gray';
        div.setAttribute('id', String(i));
        div.onclick = function()
        {
            show(this.id);
        }
        

        img.setAttribute('class', 'galleryImage');
        img.className = 'galleryImage';
        img.setAttribute('src', generateSampleString(i));
        
        div.onmouseover = function(event)
        {
            this.style.border = '3px outset grey';
        }
        div.onmouseout = function(event)
        {
            this.style.border = '3px inset grey';
        }
        var innerDiv = document.createElement('div');
        innerDiv.setAttribute('class', 'galleryItemInner');
        innerDiv.className = 'galleryItemInner';
        div.appendChild(innerDiv);
        innerDiv.appendChild(img);

        centerDoc.appendChild(div);
    }
}

function generateSampleString(id)
{
    return 'stone_colors/sample ' + String(id) + '.jpg';
}


