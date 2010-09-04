<?php

$strMenuItem = '<a href="%1$s.php">%2$s</a>';

$arrMenu = array('index' => 'Головна',
    'examples' => 'Галерея виробів',
    'gallery' => 'Гама кольорів', 
    '#' => 'Наші можливості',
    'history' => 'Догляд за виробами', 
    'details' => 'Контакти', 
    );
?>

<div id="mainNavigationHeader">
    <h1>Аспис-Ω</h1>
    <div id="mainNavigationLogo">
        Here be da logo!
    </div>
    <div id="mainNavigationMenu">

        <?php
        foreach ($arrMenu as $id => $name){
            printf($strMenuItem, $id, $name);
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
