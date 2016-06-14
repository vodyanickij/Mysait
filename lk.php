<?php session_start(); 
if(isset($_GET['exit'])) {
    session_destroy(); 

    header('Location: index.php');
    exit;
}
$login = stripslashes($login); 
$login = htmlspecialchars($login); 
$password = stripslashes($password); 
$password = htmlspecialchars($password);

$login = $_SESSION['login'];
header('Content-Type: text/html; charset=utf-8');
include('bd.php');

?> 

<!-- Личный кабинет -->

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
            <center><div id="news-form">
                <h1>Личный кабинет</h1>
            </div>     
            <table border="1" align="center" width="550" cellspacing="0" cellpadding="5">
                <tbody>
                    <tr>
                        <td>

                            <?php

                            $result = mysql_query("SELECT * FROM users WHERE login='$login'",$db);  
                            $row = mysql_fetch_array($result);

                            if (empty($_SESSION['login']) or empty($_SESSION['id'])) 
                            { 
                               include 'block/login.php';
                           } 
                           else 
                            {echo("<b>Ваш логин: </b>". $row['login']."<br>"." <b>Номер сессии : </b>".$_SESSION['id'].'<br>');
                    }if ($row['admin'] == 1){
                        echo('<a href=/admin/>Админ центр </a>');
                    } if ($row['admin'] == 0){
                        echo('<a href=zapis.php>Запись</a>');
                    }
                    ?>

                </tbody>
            </table> </td>
        </center>
    </tr>
    <tr>
        <td colspan="3" class="footer"><div id='right'>Все права защищены &copy <?=date('Y')?></div></td>
    </tr>
</table>
</body>