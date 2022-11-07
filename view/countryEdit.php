<?php
ob_start();
$titel = "Изменить страну";
?>
<!--content country ADD array -->
<?php
$continents = array('Asia', 'Europe', 'North America', 'Africa', 'Oceania', 'Antarctica', 'South America');
?>
<div class="box-header with-border">
    <h3 class="box-title"><strong> Manage - Edit country</strong></h3>
    <!-- error message -->
    <?php
if (isset($error))
    echo '<p>' . $error . '</p>';
?>
</div>
<div>
    <form action="editresult?<?php echo $country['Code']; ?>" method="POST">
        <div class="col-md-6" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Code *:</strong>
                    <input readonly type="text" name="Code" class="form-control" placeholder="Code country" maxlength=3 value=<?php echo $country['Code'] ?>>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name *:</strong>
                    <input type="text" name="Name" class="form-control" placeholder="Name country" value=<?php echo $country['Name'] ?> required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Continent:</strong>
                    <select name="Continent" class="form-control">
                    <?php
                        foreach ($continents as $continent) {
                            echo '<option value="'.$continent.'" ';
                            if($continent == $country['Continent']) echo 'selected';
                            echo '>'.$continent.'</option>';
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Region:</strong>
                    <input type="text" name="Region" class="form-control" value=<?php echo $country['Region'] ?> placeholder="Region">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>IndepYear:</strong>
                    <input type="text" name="IndepYear" class="form-control" value=<?php echo $country['IndepYear'] ?>  placeholder="IndepYear">
                </div>
            </div>
        </div>
        <div class="col-md-6" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Population:</strong>
                    <input type="text" name="Population" class="form-control" value=<?php echo $country['Population'] ?>  placeholder="Population" value=0>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>GovermentForm:</strong>
                    <input type="text" name="GovernmentForm" class="form-control" value=<?php echo $country['GovernmentForm'] ?>  placeholder="GovernmentForm">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>HeadOfState:</strong>
                    <input type="text" name="HeadOfState" class="form-control" value=<?php echo $country['HeadOfState'] ?>  placeholder="HeadOfState">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Code2 - domen:</strong>
                    <input type="text" name="Code2" class="form-control" value=<?php echo $country['Code2'] ?>  placeholder="Code2 - domen" maxlength=2>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="send">Update country</button>
                <a href="countrylist" type="button" class="btn btn-primary">Back to list</a>
            </div>
        </div>
    </form>
</div>
<!-- end content-->
<?php
    $content  = ob_get_clean();
    include "view/templates/layout.php";
?>