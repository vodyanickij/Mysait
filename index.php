<?php 

session_start(); 
if(isset($_GET['exit'])) {
    session_destroy(); 

    header('Location: index.php');
    exit;
}
include('bd.php');

?> 

<!-- Главная страница -->

<head>
    <link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Близнюковский РЦПМД</title>
</head>
<body>
    <table cellpadding="0" cellspacing="0" width="860" align="center">
        <tr>
            <?php
            include 'block/header.php';
            ?>
        </tr>
        <td class="center_col">
            
        <center><h1>Близнюковский РЦПМД</h1><img src="image/img5.jpg"></center>
        </td>
    </tr>
    <tr>
        <td colspan="3" class="footer"><div id='right'>Все права защищены &copy <?=date('Y')?></div></td>
    </tr>
</table>
</body>