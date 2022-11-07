<?php
class Controller { 
    //Стартовая страница
    public static function StartSite() {
        include_once('view/homepage.php');
        return ;
    }

    //Страница список стран
    public static function StateList() {
        $stateList = Model::getStateList();
        include_once('view/StateList.php');
        return;
    }

    //Страница список городов по странам
    public static function CityListByState($code) {
        $state = Model::getState($code);
        $cityList = Model::getCityListByState($code);
        include_once('view/cityList.php');
        return;
    }

    //Страница список городов
    public static function CityList(){
        $cityList = Model::getCityList();
        include_once('view/cityList.php');
        return;      
    }

    // Страница список континентов и все страны
    public static function ContinentStateList() {
        $continentList = Model::getContinentList(); //Список континентов
        $stateList = Model::getStateList(); //список стран - все 
        include_once('view/continentList.php');
        return;
    }

    //Страница список стран по континету
    public static function StateByContinent($name) {
        $continentList =  Model::getContinentList();// список континентов
        $stateList = Model::getStateByContinent($name); //список стран по континенту
        include_once("view/continentList.php");
        return;
    }

    //search by code or by name
    public static function SearchByCode($name) {
        $state = Model::getStateByCode($name); //Данные одной страны по коду или названияю

        include_once("view/stateCode.php");
        return;
    }

   //Страница Error
   public static function error404() {
    include_once('view/error404.php');
    return;
   }
	
}//END CLASS
?>















