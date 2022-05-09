<!-- Бд с основной информаицей о сервере -->

<?php


$server = "127.0.0.1";
$login = "root";
$pass = "";
$name_db = "test";

$link = mysqli_connect($server, $login, $pass, $name_db);
if ($link== False ){
    echo "соединение не удаорсь ";
}

?>