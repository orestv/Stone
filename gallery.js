nScroll = 0;

function show(id)
{
    nScroll = window.pageYOffset;
    window.scroll(0, 0);
    nCurrentId = Number(id);
    document.getElementById('greyBackground').style.visibility='visible';
    document.getElementById('largeView').style.visibility='visible';
    document.getElementById('imgView').src = generateSampleUrl(nCurrentId);
    updateCounter(nCurrentId, nMaxIds);
}

function hide()
{
    window.scroll(0, nScroll);
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
    nCurrentId = (nCurrentId + nMaxIds+1) % (nMaxIds+1);
    show(nCurrentId);
}

function updateCounter(id, maxid)
{
    var strName = generateSampleName(id);
    dvStatus.innerHTML = '<i>'+strName+'</i>';
}

function generateList()
{
    var footer = document.getElementById('mainNavigationFooter');
    var strUrl, div, img, centerDoc;
    centerDoc = document.getElementById('centerDoc');
    for (var i = 0; i <= nMaxIds; i++)
    {
        div = document.createElement('div');
        img = document.createElement('img');
        div.setAttribute('class', 'galleryItem');
        div.className = 'galleryItem';
        div.setAttribute('id', String(i));
        div.onclick = function()
        {
            show(this.id);
        }
        
        img.setAttribute('class', 'galleryImage');
        img.className = 'galleryImage';
        img.setAttribute('src', generateSampleUrl(i));
        
        div.onmouseover = function(event)
        {
            this.style.borderStyle = 'groove';
        }
        div.onmouseout = function(event)
        {
            this.style.borderStyle = 'ridge';
        }
        var innerDiv = document.createElement('div');
        innerDiv.setAttribute('class', 'galleryItemInner');
        innerDiv.className = 'galleryItemInner';

        var nameDiv = document.createElement('div');
        nameDiv.setAttribute('class', 'dvSamplename');
        nameDiv.className = 'dvSampleName';
        nameDiv.innerHTML = generateSampleName(i);

        div.appendChild(nameDiv);
        div.appendChild(innerDiv);
        innerDiv.appendChild(img);
        centerDoc.appendChild(div);
        footer.setAttribute('class', footer.getAttribute('class'));
        footer.className = footer.className;
    }
}
