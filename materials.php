<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title>Аспис-Ω - Примеры материалов</title>
<meta name="generator" content=
"HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css"/>
<link href="navigation.css" rel="stylesheet" type="text/css"/>
<link href="gallery.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">

<?php include('gallery.php')?>

arrSamples = <?php echo generateJavascriptList(generateFileArray('materials'));?>

function generateSampleUrl(id)
{
    return arrSamples[id]['filename'];
}

function generateSampleName(id)
{
    return arrSamples[id]['name'];
}

nMaxIds = arrSamples.length;

</script>
<script type="text/javascript" src="func.js"></script>
<script type="text/javascript" src="gallery.js"></script>

<title>Галлерея</title>
</head>
<body onload="generateList();">


        <?php include('navigation.php');?>
    <div id="centerDoc">
        <h2>Приклади матеріалів, які ви можете замовити:</h2>
        <p>
            При замовленні вкажіть номер текстури, вказаний біля малюнка - це збереже ваш час.
        </p>
    </div>
        <?php echo generateGalleryDivs();?>
    </body>
</html>
