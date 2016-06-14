<!-- Шапка -->

<html>
<body>

    <div id="logo">  </div>
    <td colspan="3" class="header">
        <ul id="menu">
            <li><a href="index.php">Главная</a></li>    
            <li><a href="zapis.php">Запись</a></li>
            <li><a href="lk.php">Личный кабинет</a></li>
            <li><a href="contact.php">Контакты</a></li>
            <li><h> </h></li>
            <li><h> </h></li>
            <li><h> 
                <?php if (empty($_SESSION['login']) or empty($_SESSION['id'])) { 
                        echo "Вы вошли на сайт, как гость<br>"; 
                    }else{ 
                        echo "Вы вошли на сайт, как ".$_SESSION['login']; 
                    } 
                ?>
            </h></li>
                <li><?php 
                    if (empty($_SESSION['login']) or empty($_SESSION['id'])){
                    }else{
                        echo "<a href=/exit.php>Выйти</a>";}
                    ?>
            </li>
        </ul>
    </td>
</body>
</html>