<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>

<title>Приклади виробів</title>
<meta name="generator" content=
"HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css"/>
<link href="navigation.css" rel="stylesheet" type="text/css"/>
<link href="gallery.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
<?php include('gallery.php')?>

arrSamples = <?php echo generateJavascriptList(generateFileArray('examples'));?>

function generateSampleUrl(id)
{
    return arrSamples[id]['filename'];
}

function generateSampleName(id)
{
    return '';
}

nMaxIds = arrSamples.length;
</script>
<script type="text/javascript" src="func.js"></script>
<script type="text/javascript" src="gallery.js"></script>

<title>Приклади матеріалів</title>
</head>
<body onload="generateList();">

        <?php include('navigation.php');?>
    <div id="centerDoc">
        <h2>Приклади виробів</h2>

        
    </div>
        <?php echo generateGalleryDivs();?>
    </body>
</html>
