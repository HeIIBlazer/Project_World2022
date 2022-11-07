<?php
class ModelCity {

    public static function getCity($code){
        $sql = "SELECT * FROM `city` WHERE `ID`='".$code."'";
        $db = new database();
        $item = $db -> getOne($sql);
        return $item;
    }

    public static function getCityCodes(){
        $sql = "SELECT * FROM `country` ORDER BY `country`.`Code` ASC;";
        $db = new database();
        $item = $db -> getAll($sql);
        return $item;
    }

    public static function cityAddResult() {
        $result = false;
        if(isset($_POST['send'])){
            $Code = strtoupper($_POST['CountryCode']);
            $Name=$_POST['Name'];
            $Population=$_POST['Population'];
            if($Code!="" && $Name!=""){
                $sql="INSERT INTO `city` (`Name`, `CountryCode`, `Population`)VALUES ('$Name','$Code','$Population')";
                $database = new database();
                $item = $database -> executeRun($sql);
                if($item==true) $result = true;
            }
        }
        return $result;
    }
    public static function cityEditResult($ID) {
        $result = false;
        if(isset($_POST['send'])){
            $Code = strtoupper($_POST['CountryCode']);
            $Population=$_POST['Population'];
            $Name=$_POST['Name'];
            // $updated_at = date('Y-m-d');
            $sql="UPDATE `city` SET `Name`='$Name', `CountryCode`='$Code', `Population`='$Population' WHERE `city`.`ID` =
            '".$ID."'";
            $database = new database();
            $item = $database -> executeRun($sql);
            if($item==true) $result = true;
        }
        return $result;
    }
    public static function cityDeleteResult($code) {
        $result = false;
        if(isset($_POST['send'])){
            $sql = "UPDATE `city` SET `status` = 0 WHERE `city`.`ID` = '".$code."'";
            $database = new database();
            $item = $database -> executeRun($sql);
            if($item==true) $result = true;
        }
        return $result;
    }
}
?> 