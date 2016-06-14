<!-- Шапка -->

<html>
<body>

    <div id="logo">  </div>
    <td colspan="3" class="header">
        <ul id="menu">
            <li><a href="../index.php">Главная</a></li>    
            <li><a href="zapis.php">Записи</a></li>
            <li><h> 
                <?php if (empty($_SESSION['login']) or empty($_SESSION['id'])) { 
                        echo "Вы вошли на сайт, как admin<br>"; 
                   } 
                ?>
            </h></li>
        </ul>
    </td>
</body>
</html>