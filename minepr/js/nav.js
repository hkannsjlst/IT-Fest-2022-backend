// Для более плавной работы якорей

$("a[href*=#betates]").on("click", function (e) {
    var anchor = $(this);
    $('html, body').stop().animate({
    scrollTop: $(anchor.attr('href')).offset().top
    }, 777);
    e.preventDefault();
    return false;
    });

    $("a[href*=#features]").on("click", function (e) {
        var anchor = $(this);
        $('html, body').stop().animate({
        scrollTop: $(anchor.attr('href')).offset().top
        }, 777);
        e.preventDefault();
        return false;
        });

        $("a[href*=#photos]").on("click", function (e) {
            var anchor = $(this);
            $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
            }, 777);
            e.preventDefault();
            return false;
            });

            $("a[href*=#raiting]").on("click", function (e) {
              var anchor = $(this);
              $('html, body').stop().animate({
              scrollTop: $(anchor.attr('href')).offset().top
              }, 777);
              e.preventDefault();
              return false;
              });

              $("a[href*=#desc]").on("click", function (e) {
                var anchor = $(this);
                $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top
                }, 777);
                e.preventDefault();
                return false;
                });




                $("a[href*=#policy]").on("click", function (e) {
                  var anchor = $(this);
                  $('html, body').stop().animate({
                  scrollTop: $(anchor.attr('href')).offset().top
                  }, 777);
                  e.preventDefault();
                  return false;
                  });





            // Для работ галереи 
            $(document).ready(function () {
              $('.flexslider').flexslider({
                animation: 'fade',
                controlsContainer: '.flexslider'
              });
            });
        

           
          
            
           
        

        $(document).ready(function() {
          $('.nav').onePageNav({
            begin: function() {
              $('body').append('<div id="device-dummy" style="height: 1px;"></div>');
            },
            end: function() {
              $('#device-dummy').remove();
            }
          });
        });


        // открытие страницы с бета тестомпо клику на кнопку 
  
      

  function check()
  {
  location.href='beta.html';
  }
  function b()
  {
  location.href='list.php';
  }

// Скрипт для страницы с галереей 
