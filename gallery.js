function show(id)
{
    document.getElementById('greyBackground').style.visibility='visible';
    document.getElementById('largeView').style.visibility='visible';
    document.getElementById('imgView').src = generateSampleString(id);
}

function hide()
{
    document.getElementById('greyBackground').style.visibility='hidden';
    document.getElementById('largeView').style.visibility='hidden';
    //document.getElementById('imgView').src = generateSampleString(id);
}

function generateList()
{
    var strUrl, div, img, centerDoc;
    centerDoc = document.getElementById('centerDoc');
    for (var i = 1; i < 36; i++)
    {
        div = document.createElement('div');
        img = document.createElement('img');
        div.setAttribute('class', 'galleryItem');
        div.setAttribute('id', String(i));
        div.setAttribute('onclick', 'show(' + String(i) + ');');

        img.setAttribute('class', 'galleryImage');
        img.setAttribute('src', generateSampleString(i));

        div.appendChild(img);

        centerDoc.appendChild(div);

    }
}

function generateSampleString(id)
{
    return 'stone_colors/sample ' + String(id) + '.jpg';
}
