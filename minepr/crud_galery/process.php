<?php 
include "config.php";


if (isset($_GET['get_users'])) {
    $sql = "SELECT * FROM users";
  
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     
        while ($row = $result->fetch_assoc()) {
    ?>

    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>

      
        <td><?php echo $row['gender']; ?></td>
         
      
        <td><button class="btn btn-info" onclick="edit_record(<?php echo $row['id']; ?>)" >Изменить </button>&nbsp;<button class="btn btn-danger"  onclick="delete_record(<?php echo $row['id']; ?>)" >Удалить</button></td>
    </tr>   
                
    <?php
        }
    }
}
    
if (isset($_POST['firstname'])) {
    $firstname    = $_POST['firstname'];
    $user_id      = $_POST['user_id'];
    $lastname     = $_POST['lastname'];
   
  
    $gender       = $_POST['gender'];
  
    if ($user_id == '') {
        $sql = "INSERT INTO `users`(`firstname`, `lastname`, `gender` ) VALUES ('$firstname','$lastname','$gender')";
        $message = "Запись успешно создана .";
    }else{
        // пишем обновленное значение квеи 
        $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`gender`='$gender' WHERE `id`='$user_id'";
        $message = "Запись успешно обновлена .";
    }
    //экзекутим квери 
    $result = $conn->query($sql);

    if ($result) {
        $response = array('status' => true, 'message' => $message);
    }else{
        $response = array('status' => false, 'message' => $conn->error);
    }

    echo json_encode($response);exit();
}

if (isset($_GET['delete_id'])) {
	$user_id = $_GET['delete_id'];

	// удаляем запись 
	$sql = "DELETE FROM `users` WHERE `id`='$user_id'";

	

	$result = $conn->query($sql);

	if ($result) {
        $result = array('status' => true, 'message' => 'Запись успешно удалена .');
	}else{
        $result = array('status' => true, 'message' => $conn->error);
	}

    echo json_encode($result);exit();
}

if (isset($_GET['edit_id'])) {
	$user_id = $_GET['edit_id'];

	// обращаемся к скюлю для получения данных 
	$sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

	
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