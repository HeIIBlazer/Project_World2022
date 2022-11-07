<?php
    ob_start();
    $titel = "Список стран";
?>
<!-- content stateList -->
    <table class="table table-striped">
        <tr>
            <th style="width:10%">Code</th>
            <th style="width:10%">Country name</th>
            <th style="width:10%">IndepYear</th>
            <th style="width:10%">Population</th>
            <th style="width:15%">Continent</th>
            <th style="width:30%">GovernmentForm</th>
            <th style="width:15%">Cities</th>
        </tr>
        <tbody>
            <?php
            foreach ($stateList as $state) {
                echo '<tr>
                    <td>' . $state['Code'] . '</td>
                    <td>' . $state['Name'] . '</td>
                    <td>' . $state['IndepYear'] . '</td>
                    <td>' . $state['Population'] . '</td>
                    <td>' . $state['Continent'] . '</td>
                    <td>' . $state['GovernmentForm'] . '</td>
                    <td><a href="citiesState?' . $state['Code'] . '">Cities by state</a></td>
                    </tr>';
            }
            echo '<tr>
                <td colspan=6 class="textposition">Total countries</td>';
            echo '<td>' . count($stateList) . '</td>';
            echo '<tr>';
            ?>
        </tbody>
    </table>
<!-- end content stateList -->

<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>