<div id="mainNavigationHeader">
    <h1>Аспис-Ω</h1>
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
<?php

$strMenuItem = '<li><a href="%s">%s</a></li>';

$arrMenu = array('index.php' => 'Кратко о главном',
    'history.php' => 'История', 
    'gallery.php' => 'Гама кольорів', 
    'details.php' => 'Изготовление и свойства', 
    'examples.php' => 'Галерея виробів');
?>

<div id="mainNavigationMenu">
    <ul>
<?php
foreach ($arrMenu as $url => $name){
    printf($strMenuItem, $url, $name);
}
?>
   </ul>
</div>

<div id="mainNavigationFooter">
    © 2010 Orest Voloshchuk, orest.v@gmail.com
</div>
