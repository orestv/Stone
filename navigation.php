<?php

$strMenuItem = '<td class="buttonBorder tdLeft"></td><td class="tdCenter"><a href="%1$s">%2$s</a></td><td class="buttonBorder tdRight"></td><td></td>';

$arrMenu = array('index.php' => 'Головна',
    'examples.php' => 'Галерея виробів',
    'materials.php' => 'Гама кольорів', 
    '#' => 'Наші можливості',
    'history.php' => 'Догляд за виробами', 
    'details.php' => 'Контакти', 
    );
?>

<div id="mainNavigationHeader">
    <h1>Аспис-Ω</h1>
    <div id="mainNavigationLogo">
    </div>
    <div id="mainNavigationMenu">
        <table class="menuItem"><tr>

        <?php
        foreach ($arrMenu as $id => $name){
            printf($strMenuItem, $id, $name);
        }
        ?>
        </tr></table>
    </div> 
</div>
<div id="mainNavigationMotto">
    Супер. Пафосний. Девіз.
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
