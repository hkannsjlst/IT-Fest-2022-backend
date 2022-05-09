 <?php
$servername = "localhost";
$username = "root"; // имя 
$password = ""; // пароль, у меня он пустой 
$dbname = "mydb"; //имя бд к которой подключаемся 

// создаем подключение 
$conn = new mysqli($servername, $username, $password, $dbname);
// проверяем подключение 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?> 