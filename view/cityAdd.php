<?php
ob_start();
$titel = "Добавить город";
?>
<!--content country ADD array -->
<div class="box-header with-border">
    <h3 class="box-title"><strong> Manage - Add city</strong></h3>
    <!-- error message -->
    <?php
if (isset($error))
    echo '<p>' . $error . '</p>';
?>
</div>
<div>
    
    <form action="addresultcity" method="POST">

        <!--Название города-->
        <div class="col-md-6" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name *:</strong>
                    <input type="text" name="Name" class="form-control" placeholder="Name city" required>
                </div>
            </div>

            <!-- Код страны -->
            <div class="col-md-12">
                <div class="form-group">
                    <strong>CountryCode *:</strong>
                    <select name="CountryCode" class="form-control">
                        <?php
                            foreach ($cityList as $cityCode) {
                                echo '<option value="' . $cityCode['Code'] . '" >' . $cityCode['Code'] . '</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>

            <!-- Популяция -->
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Population:</strong>
                    <input type="number" name="Population" class="form-control" placeholder="Population">
                </div>
            </div>
            <!-- кнопки сохранения и возвращения к списку -->
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="send">Save city</button>
                <a href="citylist" type="button" class="btn btn-primary">Back to list</a>
            </div>
        </div>
    </form>
</div>
<!-- end content-->
<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>