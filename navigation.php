<?php

$strMenuItem = '<div class="menuItem"><a href="%s">%s</a></div>';

$arrMenu = array('index.php' => 'Головна',
    'examples.php' => 'Галерея виробів',
    'gallery.php' => 'Гама кольорів', 
    '#' => 'Наші можливості',
    'history.php' => 'Догляд за виробами', 
    'details.php' => 'Контакти', 
    );
?>

<div id="mainNavigationHeader">
    <h1>Аспис-Ω</h1>
    <div id="mainNavigationLogo">
        Here be da logo!
    </div>
    <div id="mainNavigationMenu">

        <?php
        foreach ($arrMenu as $url => $name){
            printf($strMenuItem, $url, $name);
        }

    ?>
    </div> 
</div>

<div id="mainNavigationContacts">
    <table class="contacts">
        <tr>
            <td colspan="2">
                <center><i>
                    Наши контакты:
                </i></center>
            </td>
        </tr>
        <tr>
            <td>
                097 946 1982
            </td>
            <td>
                Николай
            </td>
        </tr>
        <tr>
            <td>
                068 198 2674
            </td>
            <td>
                Елена
            </td>
        </tr>
    </table>

</div>

<div id="mainNavigationFooter">
    © 2010 Orest Voloshchuk, orest.v@gmail.com
</div>
