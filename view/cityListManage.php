<?php
    ob_start();
    $titel = "Список городов - УПРАВЛЕНИЕ";
?>

<?php
//сообщения об ошибках запросов действий: INSERT,UPDATE,DELETE
if(isset($_SESSION['message'])){
    echo '<div style ="text-align: left; margin-bottom: 5px; background-color: #e6e6de"><p>';
    echo $_SESSION['message'];
    unset ($_SESSION['message']); //удалить перменную сессии
    echo '</p></div>';
}
// end message
?>

<!-- content stateList -->
<style>
    .btn {
        margin-left: 0;
        margin-bottom: 10px;
    }
</style>
<div style="text-align: right; margin-bottom: 5px;">
        <a href="addcity" class="btn btn-primary btn-sm btn-flat"> New city</a>
    </div>
    <table class="table table-striped">
    <tr>
        <th style="width:10%">ID</th>
        <th style="width:25%">City name</th>
        <th style="width:25%">Country Code</th>
        <th style="width:25%">Population</th>
        <th style="width:15%; text-align: right;">Действия</th>
    </tr>
    <tbody>
        <?php
        foreach ($cityList as $city) {
            echo '<tr>
            <td>'.$city['ID'].'</td>
            <td>'.$city['Name'].'</td>
            <td>'.$city['CountryCode'].'</td>
            <td>'.$city['Population'].'</td>
            <td>
            <a href="editcity?'.$city['ID'].'" class=" btn btn-success btn-sm edit btn-flat">Edit</a>
            <a href="deletecity?'.$city['ID'].'"class = "btn btn-danger btn-sm delete btn-flat">Delete</a>
            </td>
            </tr>';
        }
            echo '<tr>
                <td colspan=3 class="textposition">Total cities</td>';
            echo '<td>'. count($cityList).'</td>';
            echo '<tr>';
            ?>
        </tbody>
    </table>
<!-- end content stateList -->

<?php
    $content = ob_get_clean();
    include "view/templates/layout.php";
?>