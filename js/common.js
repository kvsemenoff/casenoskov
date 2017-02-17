

$(document).ready(function(){
    $('a[name=modal]').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        $('#mask').fadeTo("slow",0.8); 
        var winH = $(window).height();
        var winW = $(window).width();
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement ||document.body.parentNode || document.body).scrollTop;
        $(id).css('top',  posTop+50);
        $(id).css('left', winW/2-$(id).width()/2);
        $(id).fadeIn(500); 
    });
    $('.window .dd-close').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();
        $('.window').hide();
    }); 

    $('#mask, .an-exit__krest').click(function () {
        $('#mask').hide();
        $('.window').hide();
    }); 
    $(".phone").mask("+ 7 (999) 999 - 99 - 99?"); 
    $(".form1").submit(function() { 
        var tel = $(this).find('input[name="phone"]');
        var empty = false;
        if (tel.val() == ""){
            empty = true;
        }
        if (empty == true){
            tel.addClass("error-input");
            tel.focus();
        }else{
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                    cleanTnanks(this);
                }
            });
        }
        return false;
    });

    var owl = $(".slider-db");

    owl.owlCarousel({

        loop:true,//Зацикливаем слайдер
        nav:true, //Навигация включена
        autoplay:false,//автозапуск
        smartSpeed:1000,//Время движения
        margin:0,    
        navText:['<span class="db-left"></span>','<span class="db-right"></span>'],
        responsive:{
          0:{
            items:1
          },       
          1000:{
            items:2
          },
          1248:{
            items:2
          }
        }

    });

    function cleanTnanks(form){
        $('input[type="text"]').removeClass("error-input");
        $("input[type=text], textarea").val("");
        $('.window').hide();
         location = "spasibo.php";
        // $('a[href=#thanks]').trigger('click');
    };


    $('.checkbox-custom').on('click', function(){
        var koli4estvo = $(this).parents('label').next('span').text();
        var price = $(this).parents('label').next('span').next('span').text();

        $(this).parents('.df-blocksocks__text-block_view').find('.df-blocksocks__price_view').find('span').text(price);
        
        var next = $(this).parents('label').next('span');
        // $(this).parents('.df-blocksocks__text-block_view').find('.df-blocksocks__cap_view').html();
        // var next = $('.df-blocksocks__inputs_view').find('label').next('span').html();

        $('.df-blocksocks__cap_view').each(function(){
            $(this).parents('.df-blocksocks__text-block_view').find('.product').val($(this).text());
        });
        $('.df-blocksocks__price_view span').each(function(){
            $(this).parents('.df-blocksocks__price_view').next('.df-blocksocks__order_view').find('.price').val($(this).text());
        });

        $(next).each(function(){
            $(this).parents('.df-blocksocks__text-block_view').find('.par').val($(this).html());
        });
 
    });



});


