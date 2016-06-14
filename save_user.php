<?php 
      if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} } 
      if (isset($_POST['family'])) { $family = $_POST['family']; if ($family == '') { unset($family);} } 
      if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } 
      if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную 
      if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} } 

      $form = array($name,$family,$email,$login,$password);
     foreach($form as $s => $value){
         if($value == ""){
             echo 'Заполните поле'; 
             exit;
         }
     } 
        
      $name = htmlspecialchars(trim($_POST['name']));
      $family = htmlspecialchars(trim($_POST['family']));
      $email = htmlspecialchars(trim($_POST['email']));
      $login = htmlspecialchars(trim($_POST['login']));
      $password = htmlspecialchars(trim($_POST['password'])); 
   // подключаемся к базе 
      include ("bd.php");// файл bd.php  
      
   // проверка на существование пользователя с таким же логином 
      $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db); 
      $myrow = mysql_fetch_array($result); 
      if (!empty($myrow['login'])) { 
      exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин."); 
      } 
   // если такого нет, то сохраняем данные 
      $result2 = mysql_query ("INSERT INTO users (name,family,email,login,password) VALUES('$name','$family','$email','$login','$password')"); 
      // Проверяем, есть ли ошибки 
      if ($result2=='TRUE') 
      { 
      echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='../index.php'>Главная страница</a>";
      } 
   else { 
      echo "Ошибка! Вы не зарегистрированы."; 
      } 
      ?>