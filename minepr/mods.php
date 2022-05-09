



<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Модификации сервера  </title>
  <!-- Иконка -->
  <link rel="icon" href="img/mods_photos/fav.png" type="image/x-icon">
  <!-- Подключили шрифты -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>  

  <!-- Подключили бутстрап -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <link href="css/mods.css" type="text/css" rel="stylesheet">
<!-- для плавного скролла -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">

  <!-- Для слайд шоу  -->

<link rel="stylesheet" href="css/slider.css" type="text/css">
<!-- Эти скрипты оставлены в хедде для нормальной работы галереи, а точнее её подгрузке  -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>

<!-- для плавного скролла -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">



    </head>
    <body>

      <header>

        <div class="container">
          <div class="row">
            <div class="col-md-2">
              
              <img class="logo" src="http://img1.wikia.nocookie.net/__cb20111230161227/assassinscreed/images/7/70/Minecraft-logo.png" width="300">
            </div>
           
           
        
            <div class="col-md-10">
            
            <!-- Навигация -->
              <nav class="navbar navbar-default" role="navigation">
              <!-- Группировка для удобства на мобилках -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#minecraft-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Менюшка -->
                <div class="collapse navbar-collapse" id="minecraft-navbar">
                  <ul class="nav navbar-nav navbar-right">
                <!-- Кнопки навигации -->
                   

                    <li><a href="index.php">На главную</a></li>
                    <li><a href="mods/index.php">Добавить свой мод</a></li>
                    <li><a href="#policy">Контакты </a></l>
                    <li><a href= "https://minecraft-inside.ru/instructions/119744-kak-ustanavlivat-mody-na-maynkraft.html?" target="_blank">
                      Как установить моды</a></li>
                    <!-- Конец меню -->
          
                  </ul>
                </div>
              </nav>
          
            </div>
          </div>
        </div>

       <!-- Текст баннера -->
        <h1>Мастерская модификаций </h1>
        <p>Здесь собраны все самые лучшие моды по нашему мнению<br>
        У игроков есть возможность добавлять свои модификации, а  также <br>
    редактировать информацию об уже имеющихся </p>
          <div class="links">
           
           
          </div>
          
      <!-- Конец хедера -->
        </header>
        
      
        
<!------ Include the above in your HEAD tag ---------->

<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Наши модификации</h5>
        <div class="row">

            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="test/files/mod2.jpg" alt="card image"></p>
                                    <h4 class="card-title">Sentimentality 3 </h4>
                                    <p class="card-text">Данный мод содержит в себе множество полезных функций  для любого игрока, с этим модом вы сможете создать наборы оружия, а также  инструментов </p>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Полное описание </h4>
                                    <p class="card-text"> Из дополнительных игровых материалов, появится новая броня, новые варианты печек, инструменты для определения уровня освещения, возможность прогрузить чанки. Так же в моде есть реализация физики лежащих предметов, сжатые блоки и многое другое.</p>
                                <p>  <a href="https://ru-minecraft.ru/mody-minecraft/73169-sentimentality-3.html" target="blank" id="button3" class="butttonText">Скачать мод</a> </p>
                                    
                                </div>
                           
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           


            <?php
$server = "127.0.0.1";
$login = "root";
$pass = "";
$name_db = "mydb";

$link = mysqli_connect($server, $login, $pass, $name_db);
if ($link== False ){
    echo "соединение не удаорсь ";
}

// Переменная для вывода информации с бд 

$ret = mysqli_query($link,"SELECT * FROM `mods` ");
?>

<!-- Генерируем с помощью цикла блоки из информации бд  -->





<?php




while ($be = mysqli_fetch_assoc($ret))
{
  ?>

<div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="test/files/<?php echo $be['ker'] ?> " alt="card image"></p>
                                    <h4 class="card-title"> <?php echo $be['firstname'] ?> </h4>
                                    <p class="card-text"><?php echo $be['lastname']; ?></p>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Полноe описание </h4>
                                    <p class="card-text"><?php echo $be['email'] ?></p>
                                <p>  <a href="<?php echo $be['age'] ?>" target="blank" id="button3" class="butttonText">Скачать мод</a> </p>
                                    
                                </div>
                           
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
}
?>
            <!-- аппр -->
            
           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>
<!-- Team -->

<style>/* FontAwesome for working BootSnippet :> */

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
</style>
</div>
  </div>
</div>
  </div>
  </div>
  </div>
        <!-- конец карточки -->
        <div class="row">
          <div id="donate">
            <div class="container">
              <div class="col-md-8">
              <h1>Все модификации взяты из открытых источников.</h1>
              
              
              <p id="policy">Администрация сайта не несёт ответственность за контент добавленный пользователями. Однако материалы, которые не соответсвуют тематике будут удаляться </p>
              </div>
            </div>
          </div>
        </div>
        v

        <div class="row">
     
          <div class="container">
            <footer>
            <div class="col-md-4">
              <img src="http://img1.wikia.nocookie.net/__cb20111230161227/assassinscreed/images/7/70/Minecraft-logo.png" width="270">
                </div>
            <div class="col-md-8">
              <div class="row">
                <h2>Контакты ФЦДО в  <span>социальных</span> сетях</h2>
              <div class="social-links">
                <div class="row">
                  <div class="spacer"></div>
                  <div class="links">
                    <div class="social discord">
                      <a href=" 
                      https://discord.gg/8kpuuzG4jU
                      " target="_blank">
                        <svg role="img" viewBox="0 0 28 20">
                          <path fill="currentColor" d="M20.6644 20C20.6644 20 19.8014 18.9762 19.0822 18.0714C22.2226 17.1905 23.4212 15.2381 23.4212 15.2381C22.4384 15.881 21.5034 16.3334 20.6644 16.6429C19.4658 17.1429 18.3151 17.4762 17.1884 17.6667C14.887 18.0953 12.7774 17.9762 10.9795 17.6429C9.61301 17.381 8.43836 17 7.45548 16.6191C6.90411 16.4048 6.30479 16.1429 5.70548 15.8096C5.63356 15.7619 5.56164 15.7381 5.48973 15.6905C5.44178 15.6667 5.41781 15.6429 5.39384 15.6191C4.96233 15.381 4.7226 15.2143 4.7226 15.2143C4.7226 15.2143 5.87329 17.1191 8.91781 18.0238C8.19863 18.9286 7.31164 20 7.31164 20C2.0137 19.8333 0 16.381 0 16.381C0 8.7144 3.45205 2.50017 3.45205 2.50017C6.90411 -0.07123 10.1884 0.000197861 10.1884 0.000197861L10.4281 0.285909C6.11301 1.52399 4.12329 3.40493 4.12329 3.40493C4.12329 3.40493 4.65068 3.11921 5.53767 2.71446C8.10274 1.59542 10.1404 1.2859 10.9795 1.21447C11.1233 1.19066 11.2432 1.16685 11.387 1.16685C12.8493 0.976379 14.5034 0.92876 16.2295 1.11923C18.5068 1.38114 20.9521 2.0478 23.4452 3.40493C23.4452 3.40493 21.5514 1.61923 17.476 0.381146L17.8116 0.000197861C17.8116 0.000197861 21.0959 -0.07123 24.5479 2.50017C24.5479 2.50017 28 8.7144 28 16.381C28 16.381 25.9623 19.8333 20.6644 20ZM9.51712 8.88106C8.15068 8.88106 7.07192 10.0715 7.07192 11.5239C7.07192 12.9763 8.17466 14.1667 9.51712 14.1667C10.8836 14.1667 11.9623 12.9763 11.9623 11.5239C11.9863 10.0715 10.8836 8.88106 9.51712 8.88106ZM18.2671 8.88106C16.9007 8.88106 15.8219 10.0715 15.8219 11.5239C15.8219 12.9763 16.9247 14.1667 18.2671 14.1667C19.6336 14.1667 20.7123 12.9763 20.7123 11.5239C20.7123 10.0715 19.6336 8.88106 18.2671 8.88106Z"/>
                        </svg>
                      </a>
                    </div>
                    <div class="social telegram">
                      <a href="https://t.me/FEDCDOMinecraft/" target="_blank">
                        <svg role="img" viewBox="0 0 448 512">
                          <path fill="currentColor" d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"/>
                        </svg>
                      </a>
                    </div>
                    <div class="social vk">
                      <a href="  https://vk.com/FEDCDOMinecraft" target="_blank">
                        <svg role="img" viewBox="0 0 576 512">
                          <path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"/>
                        </svg>
                      </a>
                    </div>
              </div>
              </div>
             
                </div>
              </div>
            </div>
          </footer>
          </div>
        </div>
            
            
      
        


 
 
 
        <!-- Подключили ещё несколько библиотек. Скрипты  которые можно было вынести вынесены с хедера в конец боди для оптимизации работы сайта (загрузке стилей, а потом скриптов)--> 
        
        <script type="text/javascript" src="js/nav.js"></script>

        <script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
    
        

         
      </body>
      </html>