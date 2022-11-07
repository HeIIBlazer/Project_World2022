<?php
/*URI унифицированный идентификатор ресурса, 
	который был предоставлен для доступа к странице
знак ? отделяет полный путь и значение 
	переменной идентификатора для фильтрации
*/
$host = explode('?', $_SERVER['REQUEST_URI']);
//полный путь к проекту до знака ?
$path=$host[0];
	//количество папок вложений - считаем символы "/"
	$num = substr_count($path, '/');
	//вычисляем маршрут после последнего символа "/"
	$route = explode('/', $path)[$num];
//значение переменной - идентификатора фильтрации - после знака ?
if(strstr($_SERVER['REQUEST_URI'],'?')){//если найден символ '?'
	$id=urldecode($host[1]);//прочитаем значение из адресной строки и уберем пробелы
}
//-----------------------

if ($route == '' OR $route == 'index.php') {
	//Главная страница
	Controller::StartSite();
}

elseif ($route == 'states'){
	Controller::StateList();
}

//список городов по странам
elseif ($route == 'citiesState') {
	if(isset($id)){ //код государства
		Controller::CityListByState($id);
	}else{
		Controller::error404();
	}
}

// список городов
elseif ($route == 'cities'){
	Controller::CityList();
}

// континенты -> все страны
elseif ($route == 'continent') {
	controller::ContinentStateList();
}

// список стран по континентам
elseif ($route == 'continentState'){
	if(isset($id)){ //название континента
		Controller::StateByContinent($id);
	}else{
		Controller::error404();
	}
}

// search 
elseif ($route == 'search') {
	if(isset($_GET['text'])){
		Controller::SearchByCode($_GET['text']);
	}else{
		Controller::error404();
	}
}

// manage country CRUD
// список стран-государств - Read
elseif ($route == 'countrylist' ) {
	ControllerCountry::CountryList();
}

// add country - create
elseif($route == 'addcountry'){
	ControllerCountry::CountryAddForm();
}

elseif($route == 'addresult'){
	ControllerCountry::CountryAddResult();
}

// edit country - UPDATE

elseif ($route == 'editcountry') {
	if(isset($id)){ //код страны
		ControllerCountry::CountryEditForm($id);
	}else{
		Controller::error404();
	}
}

elseif ($route == 'editresult') {
	if(isset($id)){ //код страны
		ControllerCountry::CountryEditResult($id);
	}else{
		Controller::error404();
	}
}

// delete country - DELETE

elseif ($route == 'deletecountry') {
	if(isset($id)){ //код страны
		ControllerCountry::CountryDeleteForm($id);
	}else{
		Controller::error404();
	}
}

elseif ($route == 'deleteresult') {
	if(isset($id)){ //код страны
		ControllerCountry::CountryDeleteResult($id);
	}else{
		Controller::error404();
	}
}

// manage city CRUD
// список городов - Read
elseif ($route == 'citylist' ) {
	ControllerCity::CityList();
}

// add city - create
elseif($route == 'addcity'){
	ControllerCity::CityAddForm();
}

elseif($route == 'addresultcity'){
	ControllerCity::CityAddResult();
}

// edit city - UPDATE

elseif( $route == 'editcity'){
	if(isset($id)) {
		ControllerCity::CityEditForm($id);
	}else{
		Controller::error404();
	}
}

elseif( $route == 'editcityresult') {
	if(isset($id)) {
		ControllerCity::CityEditResult($id);
	}else{
		Controller::error404();
	}
}

// delete city- DELETE

elseif( $route == 'deletecity'){
	if(isset($id)) {
		ControllerCity::CityDeleteForm($id);
	}else{
		Controller::error404();
	}
}

elseif( $route == 'deleteCityresult'){
	if(isset($id)) {
		ControllerCity::CityDeleteResult($id);
	}else{
		Controller::error404();
	}
}

//...........
else {// Страница не существует
	Controller::error404();
}
?>
