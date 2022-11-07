<?php
class ControllerCountry {
    // список стран
    public static function CountryList() {
        $stateList = Model::getStateList();
        include_once('view/countryList.php');
        return;
    }
    //add country

    public static function CountryAddForm() {
        include_once('view/countryAdd.php');
        return;
    }
    public static function CountryAddResult() {
        $result = ModelCountry::countryAddResult();
        if($result==true){
            $stateList = Model::getStateList();
            $_SESSION['message'] = 'Данные добавлены';
            header('Location:countrylist');
        }else{
            $error='Не удалось добавить данные';
            include_once('view/countryAdd.php');
        }
        return;
    }

    // edit country
    public static function CountryEditForm($code) {
        $country = Model::getState($code);
        include_once('view/countryEdit.php');
        return;
    }
    public static function CountryEditResult($code) {
        $result = ModelCountry::countryEditResult($code);
        if($result==true){
            $_SESSION['message'] = 'Данные изменены - страна '.$code;
            $stateList = Model::getStateList();
            header('Location:countrylist');
        }else{
            $country = Model::getState($code);
            $error='Не удалось изменить данные';
            include_once('view/countryEdit.php');
        }
        return;
    }

    // delete country

    public static function CountryDeleteForm($code) {
        $country = Model::getState($code);
        include_once('view/countryDelete.php');
        return;
    }
    public static function CountryDeleteResult($code) {
        $result = ModelCountry::countryDeleteResult($code);
        if($result==true){
            $_SESSION['message'] = 'Данные удалены - страна '.$code;
            $stateList = Model::getStateList();
            header('Location:countrylist');
        }else{
            $country = Model::getState($code);
            $error='Не удалось удалить данные';
            include_once('view/countryDelete.php');
        }
        return;
    }

}//END CLASS
?>