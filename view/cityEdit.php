<?php
ob_start();
$titel = "Изменить город";
?>
<!--content country ADD array -->
<div class="box-header with-border">
    <h3 class="box-title"><strong> Manage - Edit city</strong></h3>
    <!-- error message -->
    <?php
        if (isset($error))
            echo '<p>' . $error . '</p>';
    ?>
</div>
<div>
    <form action="editCityResult?<?php echo $city['ID']; ?>" method="POST">
        <div class="col-md-6" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="Name" class="form-control" placeholder="Name city" value=<?php echo $city['Name'] ?>>
                </div>
            </div>
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
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Population:</strong>
                    <input type="number" name="Population" class="form-control" value=<?php echo $city['Population'] ?>  placeholder="Population">
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="send">Update city</button>
                <a href="citylist" type="button" class="btn btn-primary">Back to list</a>
            </div>
    </form>
</div>
<!-- end content-->
<?php
    $content  = ob_get_clean();
    include "view/templates/layout.php";
?>