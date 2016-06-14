<!-- Форма записи -->

<?php 

if (empty($_SESSION['login']) or empty($_SESSION['id'])){
}else{
   echo("<html><head><title>Загрузка..</title><meta http-equiv='Refresh' content='3; URL=index.php'></head></html>");
}

?> 


<head>
    <title>Близнюковский РЦПМД</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <table cellpadding="0" cellspacing="0" width="860" align="center">
        <tr>
            <?php
            include 'block/header.php';
            ?>
        </tr>
        <td class="center_col">     
            <table border="1" align="center" width="550" cellspacing="0" cellpadding="5">
                <tbody>
                    <tr>
                        <td>
                            <div id="login-form">
                                <h1>Запись на прием</h1>

                                <fieldset>
                                    <form id="d" action="zap_obr.php" method="post">
                                        <label> Вашое имя: </label>
                                        <input type="name" name="name"><br>
                                        <label> Ваша фамилия: </label>
                                        <input type="family" name="last_name"><br>
                                        <label> Ваш адресс: </label>
                                        <input type="adress" name="adress"><br>
                                        <label>Телефон:</label>
                                        <input type="telefon" name="telefon"><br>
                                        <label>Дата приема:</label><br>
                                        <input type="date" name="date" value="2015-03-03 12:00:00" size="20"><br>
                                        <label>Какая проблема у вас?:</label><br>
                                        <textarea cols="25" rows="5" name="comments"></textarea><br>
                                        <label>Выберите врача:</label><br>
                                            <?php
                                                include("bd.php");
                                                
                                                // вывод фио доктора
                                                $sotr = mysql_query("SELECT * FROM doctor");
                                                if ($sotr == true) {
                                                     echo "<select id='doctorName' name='doctorName'>";
                                                     while ($s = mysql_fetch_array($sotr)) {
                                                          echo "<option>".$s['family']." ".$s['name']." ".$s['patronymic']."</option>";
                                                     }
                                                    echo "</select>";
                                                }
                                                else {
                                                    echo "Сотрудники отсутствуют";
                                                }
                                            ?>
                                        <input type="submit" value="Новая запись">    

                                    </form>


                                </fieldset>

                            </div>


                        </td>
                    </tbody>
                </table> </td>
            </center>
        </tr>
        <tr>
            <td colspan="3" class="footer"><div id='right'>Все права защищены &copy <?=date('Y')?></div></td>
        </tr>
    </table>
</body>