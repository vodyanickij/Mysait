<?php
include('bd.php');

/*обработчик записи на прием*/

$name = $_REQUEST['name'];/*принимаем данные*/
$last_name = $_REQUEST['last_name'];
$adress = $_REQUEST['adress'];
$telefon = $_REQUEST['telefon'];
$date = $_REQUEST['date'];
$comments = $_REQUEST['comments'];
$doctorName = $_REQUEST['doctorName'];

$form = array($name,$last_name,$adress,$telefon,$date,$comments,$doctorName);/*проверяем пустые ли поля*/
    foreach($form as $s => $value){
        if($value == ""){
            echo 'Заполните поле'; 
            exit;
        }
    }

$mysql_insert = "INSERT INTO visit(name,last_name,adress,telefon,date,comments,doctorName)". 
"VALUES('{$name}','{$last_name}','{$adress}','{$telefon}','{$date}','{$comments}','{$doctorName}');";/*запись данных*/
mysql_query($mysql_insert) or die ("<p>Ошибка вставки ".mysql_error());
echo '<p>Запись успешно добавлена!</p>';
?>
<a href="../index.php">Вернуться в меню</a>