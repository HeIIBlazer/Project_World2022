<?php
/* для выборки данных из базы данных используем запросы,
 * class database из папки inc
 */
class Model {

    // список стран
    public static function getStateList(){
        $sql = "SELECT * FROM `country`  ORDER BY `country`.`Name` ASC;";//Список
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }

    //detail страна 
    public static function getState($code) {
        $sql = "SELECT * FROM `country` WHERE `Code`='".$code."'"; //Одна запись
        $db = new database();
        $item = $db->getOne($sql);
        return $item;
    }

    // Список городов по странам
    public static function getCityListByState($code) {
        $sql = "SELECT * FROM `city` WHERE `CountryCode`='".$code."'"; //Список
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }

    //Список городов
    public static function getCityList(){
        $sql = "SELECT * FROM `city` ORDER BY `city`.`Name` ASC"; //список
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }

    //Страница список континентов
    public static function getContinentList() {
        $query = "SELECT DISTINCT `Continent` FROM `country`"; //список
        $db = new database();
        $item = $db->getAll($query);
        return $item;
    }

    //Страница список стран по континету
    public static function getStateByContinent($name) {
        $sql = "SELECT * FROM `country` WHERE `Continent` = '".$name."' ORDER BY `Country`.`Name` ASC"; //Список
        $db = new database();
        $item = $db->getAll($sql);
        return $item;
    }

    //search by code or name
    public static function getStateByCode($name) {
        $query = "SELECT * FROM `country` WHERE `Code`='".$name."' OR `Name` LIKE '%".$name."%'";
        //detail
        $db = new database();
        $item = $db->getOne($query);
        return $item;
    }
	
	 

	
}//END CLASS
?>