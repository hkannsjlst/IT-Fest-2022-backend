<?php 
include "config.php";

// запрос чтобы получать инфу из бд 

$sql = "SELECT * FROM infa";
// экзекутим квери 
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/fav.png" type="image/x-icon">
	<title>Информация о сервере</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>

    <link rel="icon" href="img/mods_photos/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>

	<div class="container mt-5">
		<!-- таблица  -->
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#infformModal">Добавить блок</button>
<br>
<h2>Информация о сервере </h2>
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>Заголовок </th>
		<th>Описание </th>
		<th>Ключ фото </th>
        <th>Автор</th>
		<th>Функции</th>
        
	</tr>
	</thead>
	<tbody id="infa_data">	
	        
	</tbody>
</table>


<!-- Форма  -->
<div class="modal fade" id="infformModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Обновить форму </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" id="inf_form">
                <div class="form-group">
                <label>Заголовок </label>
                <input type="text" name="firstname" id="firstname" class="form-control">
                <input type="hidden" name="inf_id" id="inf_id" class="form-control">
                </div>

                <div class="form-group">
                <label>Описание </label>
                <input type="text" name="lastname" id="lastname" class="form-control">
                </div>

                <div class="form-group">
                <label>Ключ фото</label>
                <input type="author" name="email" id="email" class="form-control">
                </div>


                <div class="form-group">
                <label>Автор </label><br>
                <input type="radio" name="gender" value="Админ"> Админ
                <input type="radio" name="gender" value="Юзер "> Юзер
                </div>

               
                <br><br>
                <button type="submit" class="btn btn-success float-right"onClick="refreshPage()">Отправить</button>
            </form>
            <hr>

<script>
function refreshPage(){
    window.location.reload();
} 
</script>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

</div> <!-- container -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script type="text/javascript">
    function delete_record(id) {
        if(confirm("Уверены, что хотите удалить запись?")){
            $.ajax({
                type : "GET",
                url : "process.php?delete_id="+id,
                dataType : 'json',
                beforeSend : function() {
                    toastr.info("Пожалуйста, подождите..");
                },
                success : function(response) {
                    console.log(response);
                    if (response.status) { //если статус ответа равен true, отображается сообщение об успешном завершении
                         toastr.warning(response.message);
                         get_all_infa();
                    }else{
                      //  alert(response.message);
                    }
                }
            });
        }else{
         alert('ok');
        }
        
    }

    function edit_record(id) {
        $.ajax({
            type : "GET",
            url : "process.php?edit_id="+id,
            dataType : 'json',
            beforeSend : function() {
                toastr.info("Пожалуйста подождите ..");
            },
            success : function(response) {
               // alert('ok2');
                console.log(response);
                if (response.status) { //если статус ответа равен true, отображается сообщение об успешном завершении
                    $("#firstname").val(response.data.firstname);
                    $("#inf_id").val(response.data.id);
                    $("#lastname").val(response.data.lastname);
                    $("#email").val(response.data.email);
                   
                    
                    $("input[name=gender][value="+response.data.gender+"]").prop("checked",true);
    
                    
             
      ;
                    $("#infformModal").modal('show');
                  //  setTimeout(function(){ alert(response.message);window.location.reload(); }, 3000);
                    
                }else{
                  //  alert(response.message);
                }
            }
        });
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#inf_form").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type : "POST",
                url : "process.php",
                data : $("#inf_form").serialize(),
                dataType : 'json',
                beforeSend : function() {
                    toastr.info("Пожалуйста, подождите..");
                },
                success : function(response) {
                   // alert('ok2');
                    console.log(response);
                    if (response.status) {
                        toastr.success(response.message);
                        $("#inf_form")[0].reset();
                        $("#infformModal").modal('hide');
                        get_all_infa();
                    }else{
                        toastr.error(response.message);
                    }
                }
            });
        });

    });

    function get_all_infa() {

        $.ajax({
            type : "GET",
            url : "process.php?get_infa=1",
            dataType : 'html',
            success : function(response) {
                console.log(response);
                $("#infa_data").html(response);

            }
        });
    }

    get_all_infa();

   
</script>
<div> <a href="http://mainproect/minecraft_back/minepr/crud/index.php" target="blank">На страницу редактирования информации о сервере  </a> </div>
<div> <a href="http://mainproect/minecraft_back/minepr/test/index.php" target="blank"> В галерею из бд  </a> </div>
<div> <a href="http://mainproect/minecraft_back/minepr/index.php" target="blank">На главную </a> </div>
<div> <a href="http://mainproect/minecraft_back/minepr/crud_galery/index.php" target="blank">На страницу редактирования галереи сервера </a> </div>
<div> <a href="http://mainproect/minecraft_back/minepr/galery.php" target="blank">На страницу галереи сервера </a> </div>


</body>
</html>