<?php

$strMenuItem = '<td class="menuButton tdLeft"></td><td class="menuButton tdCenter"><a href="%1$s">%2$s</a></td><td class="menuButton tdRight"></td><td></td>';

$arrMenu = array('index.php' => 'Головна',
    'examples.php' => 'Галерея виробів',
    'materials.php' => 'Гама кольорів', 
    'menuCapabilities' => array(
        'ITEM_NAME' => 'Наші можливості',
        'offers.php' => 'Пропозиції',
        'comparison.php' => 'Переваги'
    ),
    'care.php' => 'Догляд за виробами', 
    'contacts.php' => 'Контакти', 
    );
?>

<div id="mainNavigationHeader">
    <h1>Аспис-Ω</h1>
    <div id="mainNavigationLogo">
    </div>
    <div id="mainNavigationMenu">
        <table class="menuItem"><tr>

        <?php
        $strPopupMenus = '';
        foreach ($arrMenu as $id => $value){
            if (is_array($value)) {
                $href = 'javascript: showPopup('.$id.');';
                $name = $value['ITEM_NAME'];
                $strPopupMenus .= '<div id="'.$id.'" class="menuPopupInner"><table class="menuItem"><tr>';
                
                foreach ($value as $id_ => $value_){
                    if ($id_ == 'ITEM_NAME')
                        continue;
                    $strPopupMenus .= sprintf($strMenuItem, $id_, $value_);
                }
                $strPopupMenus .= '</tr></table></div>';
            }
            else{
                $href = $id;
                $name = $value;
            }
            printf($strMenuItem, $href, $name);
        }
        ?>
        </tr></table>
    </div> 
</div>
<div id="mainNavigationMotto">
    Швидше. Глибше. Сильніше.
</div>

<div id="menuPopupContainer"><?php echo $strPopupMenus?></div>

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

<div id="mainNavigationFooter" class="mainNavigationFooter">
    © 2010 Orest Voloshchuk, orest.v@gmail.com
</div>
