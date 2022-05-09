<?php
include "config/we.php";
// подключились к бд и задаем переменную чтобы потом выводить значенияиз бд 
$result = mysqli_query($link,"SELECT * FROM `registration` ");
?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Иконка -->
  <link rel="icon" href="img/mods_photos/fav.png" type="image/x-icon">
  <!-- Подключили шрифты -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>  

  <!-- Подключили бутстрап -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">

    <title>Список заявок </title>
</head>
<!-- шаблон таблицы  -->
<body>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th>Идентификатор </th>
      <th>Имя</th>
      <th>Фамилия и отчество  </th>
      <th>E-mail</th>
    </tr>
  </thead>


<!-- выводим в таблицу все имеющиеся в бд заявкя циклом , при этом выводя ТОЛЬКО 4 указанных параметра  -->
  <?php while($registration  = mysqli_fetch_assoc($result))
{ 
  ?>
  <tbody>
  <tr>
    <td> <?php echo $registration ['id'] ?></td>
    <td><?php echo $registration['firstName'] ?></td>
    <td><?php echo $registration['lastName'] ?></td>
    <td><?php echo $registration['email'] ?></td>
  </tr>
</tbody>
<?php
}
  ?>
  




</table>

     
    
       
</body>
</html>