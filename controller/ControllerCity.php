<?php
class ControllerCity {
    public static function CityList() {
        $cityList = Model::getCityList();
        include_once('view/cityListManage.php');
        return;
    }
    public static function CityAddForm() {
        $cityList = ModelCity::getCityCodes();
        include_once('view/cityAdd.php');
        return;
    }
    public static function CityAddResult() {
        $result = ModelCity::cityAddResult();
        if($result==true){
            $cityList = Model::getCityList();
            $_SESSION['message'] = 'Данные добавлены';
            header('Location:citylist');
        }else{
            $cityList = ModelCity::getCityCodes();
            $error='Добавление не удалось';
            include_once('view/cityAdd.php');
        }
        return;
    }
    public static function CityEditForm($code) {
        $cityList= ModelCity::getCityCodes();
        $city = ModelCity::getCity($code);
        include_once('view/cityEdit.php');
        return;
    }
    public static function CityEditResult($ID) {
        $result = ModelCity::cityEditResult($ID);
        print_r($result);
        if($result==true){
            $_SESSION['message'] = 'Данные изменены - город '.$ID;
            $cityList = Model::getCityList();
            header('Location:citylist');
        }else{
            $cityList= ModelCity::getCityCodes();
            $city = ModelCity::getCity($ID);
            $error='Изменение не удалось';
            include_once('view/cityEdit.php');
        }
        return;
    }
    public static function CityDeleteForm($code) {
        $city = ModelCity::getCity($code);
        include_once('view/cityDelete.php');
        return;
    }
    public static function CityDeleteResult($code) {
        $result = ModelCity::cityDeleteResult($code);
        if($result==true){
            $_SESSION['message'] = 'Данные удалены - город с кодом '.$code;
            $cityList = Model::getCityList();
            header('Location:citylist');
        }else{
            $country = Model::getState($code);
            $error='Удаление не удалось';
            include_once('view/cityDelete.php');
        }
        return;
    }
}
?>