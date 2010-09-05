<?php
function generateFileArray($strDirName) {
    if (substr($strDirName, -1) != '/') $strDirName .= '/';
    $retValue = array();
    $dir = @dir($strDirName);
    while (false !==($entry = $dir->read())){
        if ($entry == '.' || $entry == '..')
            continue;
        if (is_readable($strDirName.$entry)) {
            $retValue[] = array(
                "filename" => $strDirName.$entry,
                "name" => substr($entry, 0, strrpos($entry, '.')));
        }
    }
    return $retValue;
}

function generateJavascriptList($arr){
    $str = 'new Array(';
    foreach($arr as $index => $entry) {
        $str .= "{'filename': '".$entry['filename']."', 'name': '".$entry['name']."'},";
    }
    $str = substr($str, 0, strlen($str)-1);
    $str .= ');';

    return $str;
}

function generateGalleryDivs() {
    return '
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
        <span id="spStatus"></span>
        </div>
        <div id="dvHide">
        <a href="javascript: hide();">Сховати</a>
        </div>
        </div>';
}
?>
