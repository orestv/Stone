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
$arrMenu = array('index.php' => 'Кратко о главном',
    'history.php' => 'История', 
    'details.php' => 'Изготовление и свойства', 
    'gallery.php' => 'Галлерея материалов', 
    'examples.php' => 'Галлерея изделий');
?>

<div id="mainNavigationMenu">
    <ul>
<?php
foreach ($arrMenu as $url => $name){
    echo '<li><a href="'.$url.'">'.$name.'</a></li>';
}
?>
   </ul>
</div>

<div id="mainNavigationFooter">
    © 2010 Orest Voloshchuk, orest.v@gmail.com
</div>
