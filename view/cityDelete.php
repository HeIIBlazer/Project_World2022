<?php
ob_start();
$titel = "Удалить город";
?>
<div class="box-header with-border">
    <h3 class="box-title"><strong> Manage - Delete city</strong></h3>
    <!-- error message -->
    <?php
if (isset($error))
    echo '<p>' . $error . '</p>';
?>
</div>
<div>
    <form action="deleteCityresult?<?php echo $city['ID']; ?>" method="POST">
        <div class="col-md-6" style="margin-top:10px;">
        <div class="col-md-12">
            <div class="form-group">
                    <strong>City name *:</strong>
                    <input readonly type="text" name="Code" class="form-control" placeholder="City name" maxlength=3 value=<?php echo $city['Name'] ?> required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Code *:</strong>
                    <input readonly type="text" name="Name" class="form-control" placeholder="CountryCode" value=<?php echo $city['CountryCode'] ?> required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Population *:</strong>
                    <input readonly type="text" name="Population" class="form-control" placeholder="Population" value=<?php echo $city['Population'] ?> required>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="send">Delete country</button>
                <a href="citylist" type="button" class="btn btn-primary">Back to list</a>
            </div>
        </div>
    </form>
</div>
<!-- end content-->
<?php
    $content  = ob_get_clean();
    include "view/templates/layout.php";
?>