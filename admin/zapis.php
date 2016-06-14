<html>
<head>
    <title>АдминЦентр</title>


    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <table cellpadding="0" cellspacing="0" width="860" align="center">
        <tr>
            <?php
            include 'header.php';
            ?>
        </tr>
        <td class="center_col"> 
           <?php

			include('../bd.php');

			$resultat = mysql_query("SELECT * FROM visit",$db);
			$array = mysql_fetch_array($resultat);
			do
			{
			echo "Имя: ".$array['name']."<br>Фамилия: ".$array['last_name']."<br>Адресс: ".$array['adress']."<br>Дата ".$array['date']."<br>Что болит: ".$array['comments']."<br>Доктор: ".$array['doctorName']."<br><br>";
			}
			while($array = mysql_fetch_array($resultat));
			?>          
        </td>
    </tr>
    <tr>
        <td colspan="3" class="footer"><div id='right'>Все права защищены &copy <?=date('Y')?></div></td>
    </tr>
</table>
    
</body>
</html>
	  
