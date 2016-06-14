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
                                <h1>Регистрация</h1>

                                <fieldset>
                                    <form action="save_user.php" method="post">
                                        <label> Вашое имя: </label>
                                        <input type="name" name="name"><br>
                                        <label> Ваша фамилия: </label>
                                        <input type="family" name="family"><br>
                                        <label> Ваш email: </label>
                                        <input type="email" name="email"><br>
                                        <label>Ваш логин:</label>
                                        <input type="login" name="login"><br>
                                        <label>Ваш пароль:</label>
                                        <input type="password" name="password">
                                        <input type="submit" value="Зарегистрироваться">    

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