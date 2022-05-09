<!-- Файл для обработки формы записи  -->
<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$number = $_POST['number'];

	// покдлючение к бд чтобы сохранять отправленные данные 
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, number) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $firstName, $lastName, $gender, $email, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Ваша заявка принята";
		$stmt->close();
		$conn->close();
	}

	// Редирект обратно на страницу с формой после занесения заявки в бд
	header( "refresh:1;url=beta.html" );
?>

