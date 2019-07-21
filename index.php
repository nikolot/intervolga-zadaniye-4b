<?php
  include_once('functions.php')
?>
<!DOCTYPE html>
<html lang="en">
<title>Пробная задача</title>
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>

<script src="script.js"></script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--Ввод данные о стране для добавления в список стран-->
<form method="post">
<input name="name">Страна<br>
<input name="capital">Столица<br>
<input name="peoples">Численность населения<br>
<input type="submit" onclick="changeTable()" value="Добавить страну"><br>


</form>
    <?php
      viewTable();
      ?>
</body>
    </html>