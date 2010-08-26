<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<meta name="generator" content=
"HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css"/>
<link href="navigation.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="func.js"></script>
<script type="text/javascript" src="gallery.js"></script>

<title>Галлерея</title>
</head>
<body onload="generateList();">

        <?php include('navigation.html');?>
    <div id="centerDoc">
        <h1>Примеры используемых материалов</h1>

        
    </div>
    <div id="greyBackground" onclick="hide();"></div>
    <div id="largeView">
        <div class="galleryNavPrev" onclick="move(-1);">
            <img src="images/view_arrow_left.png"/>
        </div>
        <div class="galleryNavNext" onclick="move(1);">
            <img src="images/view_arrow_right.png"/>
        </div>
        <div id="innerView">
            <img id="imgView" src="stone_colors/sample 1.jpg"/>
        </div>
        <div id="dvStatus">
            <span style="text-align: middle;width: 100%; position:absolute;" id="spStatus">Here be status</span>
        </div>
    </div>
</body>
</html>
