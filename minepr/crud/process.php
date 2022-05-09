<?php 
include "config.php";


if (isset($_GET['get_infa'])) {
    $sql = "SELECT * FROM infa";
    // Экзекутим квери 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //выходные данные каждой строки
        while ($row = $result->fetch_assoc()) {
    ?>

    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['email']; ?></td>
      
        <td><?php echo $row['gender']; ?></td>
         
      
        <td><button class="btn btn-info" onclick="edit_record(<?php echo $row['id']; ?>)" >Изменить </button>&nbsp;<button class="btn btn-danger"  onclick="delete_record(<?php echo $row['id']; ?>)" >Удалить</button></td>
    </tr>   
                
    <?php
        }
    }
}
    
if (isset($_POST['firstname'])) {
    $firstname    = $_POST['firstname'];
    $inf_id      = $_POST['inf_id'];
    $lastname     = $_POST['lastname'];
    $email        = $_POST['email'];
  
    $gender       = $_POST['gender'];
  
    if ($inf_id == '') {
        $sql = "INSERT INTO `infa`(`firstname`, `lastname`, `email`,  `gender` ) VALUES ('$firstname','$lastname','$email','$gender')";
        $message = "Запись успешно создана .";
    }else{
        //  выводим обновление квери 
        $sql = "UPDATE `infa` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`gender`='$gender' WHERE `id`='$inf_id'";
        $message = "Запись успешно обновлена .";
    }
    // экзекутим квери 
    $result = $conn->query($sql);

    if ($result) {
        $response = array('status' => true, 'message' => $message);
    }else{
        $response = array('status' => false, 'message' => $conn->error);
    }

    echo json_encode($response);exit();
}

if (isset($_GET['delete_id'])) {
	$inf_id = $_GET['delete_id'];

	// удаляем квери(запись)
	$sql = "DELETE FROM `infa` WHERE `id`='$inf_id'";

	// экзекутим квери 

	$result = $conn->query($sql);

	if ($result) {
        $result = array('status' => true, 'message' => 'Запись успешно удалена .');
	}else{
        $result = array('status' => true, 'message' => $conn->error);
	}

    echo json_encode($result);exit();
}

if (isset($_GET['edit_id'])) {
	$inf_id = $_GET['edit_id'];

	// обращаемся к скюлю для получения данных 
	$sql = "SELECT * FROM `infa` WHERE `id`='$inf_id'";

	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$response = array('status' => true, 'data' => $row);
	}else{
		$response = array('status' => false, 'data' => $conn->error);
	}
	echo json_encode($response);exit();
} 

?>