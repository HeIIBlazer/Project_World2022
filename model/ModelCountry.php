<?php
class ModelCountry {
    public static function countryAddResult() {
        $result = false;//переменная контроля
        if(isset($_POST['send'])){ //нажата ли кнопка отправить данные?
            //читаем данные из формы в переменные
            $Code = strtoupper($_POST['Code']); // преобразуем в большие буквы
            $Name=$_POST['Name'];
            $Continent=$_POST['Continent'];
            $Region=$_POST['Region'];
            $IndepYear=$_POST['IndepYear'];
            $Population=$_POST['Population'];
            $GovernmentForm=$_POST['GovernmentForm'];
            $HeadOfState=$_POST['HeadOfState'];
            $Code2=$_POST['Code2'];
            //проверяем обязательно поля
            if($Code!="" && $Name!=""){
                $created_at = date('Y-m-d');
                $updated_at = date('Y-m-d');
                //запрос на добавление данных
                $sql="INSERT INTO `country` (`Code`, `Name`, `Continent`, `Region`, `IndepYear`, `Population`, `GovernmentForm`, `HeadOfState`, `Code2`) VALUES ('$Code','$Name','$Continent','$Region','$IndepYear','$Population','$GovernmentForm','$HeadOfState','$Code2')";
                //выполняем запрос
                $database = new database();
                $item = $database -> executeRun($sql);
                //если удачно, переменная контроля -> True
                if($item==true) $result = true;
            }//if
        }//send
        return $result;
    }//add

    public static function countryEditResult($code) {
        $result = false;
        if(isset($_POST['send'])){
            $Code = strtoupper($_POST['Code']);
            $Name=$_POST['Name'];
            $Continent=$_POST['Continent'];
            $Region=$_POST['Region'];
            $IndepYear=$_POST['IndepYear'];
            $Population=$_POST['Population'];
            $GovernmentForm=$_POST['GovernmentForm'];
            $HeadOfState=$_POST['HeadOfState'];
            $Code2=$_POST['Code2'];

            if($Code!="" && $Name!=""){
                $updated_at = date('Y-m-d');
                $sql="UPDATE `country` SET `Name`='$Name', `Continent`='$Continent', `Region`='$Region', `IndepYear`='$IndepYear', `Population`='$Population',
                `GovernmentForm`='$GovernmentForm', `HeadOfState`='$HeadOfState', `Code2`='$Code2' WHERE `country`.`Code` =
                '".$code."'";
                $database = new database();
                $item = $database -> executeRun($sql);
                if($item==true) $result = true;
            }
        }
        return $result;
    }

    public static function countryDeleteResult($code) {
        $result = false;
        if(isset($_POST['send'])){
            //запрос на удаление данных

            $sql = "DELETE FROM `country` WHERE `country`.`Code` = '".$code."'";
            $database = new database();
            $item = $database -> executeRun($sql);
            if($item==true) $result = true;
        }
        return $result;
    }
}//END CLASS
?>