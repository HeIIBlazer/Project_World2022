<?php
    ob_start();
    $titel = "Государство ";
    if(isset($state) && $state) {
        $titel.= $state['Name'] . ' - код '.$state['Code'];
    }
?>
<?php
    echo '<div class="detail">';
        if(isset($state) && $state) {
            echo '<h3>' . $state['Name'] . '</h3>';
            echo '<p><b>IndepYear: </b>' . $state['IndepYear'] . '</p>';
            echo '<p><b>Population: </b>' . $state['Population'] . '</p>';
            echo '<p><b>Continent: </b>' . $state['Continent'] . '</p>';
            echo '<p><b>GovernmentForm: </b>' . $state['GovernmentForm'] . '</p>';
        }else{
            echo '<h3><b>Данных нет</b></h3>';
        }
        echo '<div class="textposition-left"><a href="states">К списку стран &#187 </a></div>';
        //ссылка
        echo '<div class="textposition-right">';
            echo '<a href="cities">К списку городов &#187 </a>';
        echo '</div>';
    echo '</div>'
?>
<?php
    $content  = ob_get_clean();
    include "view/templates/layout.php";
?>