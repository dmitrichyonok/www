<meta charset="utf-8">
<?php
    $db = mysqli_connect("localhost","root","");
    if (!$db) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
   mysqli_select_db ($db , "site");
    ?>