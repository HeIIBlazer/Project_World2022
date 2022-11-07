<?php
ob_start();
$titel = "Изменить страну";
?>
<!--content country ADD array -->
<?php
    $continents = array('Asia', 'Europe', 'North America', 'Africa', 'Oceania', 'Antarctica', 'South America');
?>
    <div class="box-header with-border">
        <h3 class="box-title"><strong> Manage - Add country</strong></h3>
    <!-- error message -->
<?php
    if (isset($error))
        echo '<p>' . $error . '</p>';
?>
</div>
<div>
    <form action="addresult" method="POST">
        <div class="col-md-6" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Code *:</strong>
                    <input type="text" name="Code" class="form-control" placeholder="Code country" maxlength=3 required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name *:</strong>
                    <input type="text" name="Name" class="form-control" placeholder="Name country" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Continent:</strong>
                    <select name="Continent" class="form-control">
                        <?php
                            foreach ($continents as $continent) {
                                echo '<option value="' . $continent . '" >' . $continent . '</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Region:</strong>
                    <input type="text" name="Region" class="form-control" placeholder="Region">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>IndepYear:</strong>
                    <input type="text" name="IndepYear" class="form-control" placeholder="IndepYear">
                </div>
            </div>
        </div>
        <div class="col-md-6" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Population:</strong>
                    <input type="number" name="Population" class="form-control" placeholder="Population" value=0>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>GovermentForm:</strong>
                    <input type="text" name="GovernmentForm" class="form-control" placeholder="GovernmentForm">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>HeadOfState:</strong>
                    <input type="text" name="HeadOfState" class="form-control" placeholder="HeadOfState">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Code2 - domen:</strong>
                    <input type="text" name="Code2" class="form-control" placeholder="Code2 - domen" maxlength=2>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="send">Save country</button>
                <a href="countrylist" type="button" class="btn btn-primary">Back to list</a>
            </div>
        </div>
    </form>
</div>
<!-- end content-->
<?php
    $content = ob_get_clean();
    include "view/templates/layout.php";
?>