$(function(){
    $('button').on('click', function(){
        $('.image').children('img').attr('src', 'IMG_2380.jpg');
    });

    $('#login-show').click(function(){
        $("#login-modal").fadeIn();
      })
})