<?php 

session_start(); 
?> 

<!-- Авторизация -->

<div id="login-form">
    <h1>Авторизация на сайте</h1>

    <fieldset >
        <form action="testreg.php" method="post">
            <label>Ваш логин:</label>
            <input type="login" name="login"><br>
            <label>Ваш пароль:</label>
            <input type="password" name="password">
            <input type="submit" value="Войти">    

        </form>

        <a href="reg.php">Зарегистрироваться</a>  
    </fieldset>

</div>
	 
      
     