$(function() {
    //Функция проверяет заполнено ли поле с телефоном
    function formValide() {
        var str = $('#contact_form input[name=tel]').val();
        str = jQuery.trim(str);
        if(str.length < 5){
            alert ('Введите телефон');
            return false;
        }
        return true;
    }

    //при нажатии на кнопку button нужной формы запускаем функцию обработки данных
    $('#contact_form .button').live('click', function() {
        if (formValide()) {
            //если форма прошла проверку, выводим блок с текстом ожидания
            $('#contact_form').before('<h3 id="contact_form_info">Оформление заявки. Подождите...</h3>');
            $('#contact_form').hide();
            //берем путь php обработчика
            order_url = $('#contact_form').attr('action');
            //посылаем асинхронный запрос на сервер и передаем все данные формы
            $.post(order_url,{
                name: $('#contact_form input[name=name]').val(),
                tel: $('#contact_form input[name=tel]').val(),
                email: $('#contact_form input[name=email]').val(),
                message: $('#contact_form textarea[name=message]').val(),
                send: "1"
            }, function(data) {
                //выводим возврашаемый сервером код html вместо содержимого формы
                $('#contact_form').html(data);
                $('#contact_form').show();
                $('#contact_form_info').remove();
            }, "html");
        }
        return false;
    });
});

// =========================================================================  go_order
$(function () {
    //фкнкция вызова формы обратной связи
    $('#callback').click(function(){
        //появление окна обратной связи
        $('#popup').fadeIn();
        //добавляем к окну иконку закрытия
        $('#popup').append('<a id="popup_close"></a>');
        //расчитываем высоту и ширину всплывающего окна что бы вывести окно прямо по центру экрана
        q_width = $('#popup').outerWidth()/-2;
        q_height = $('#popup').outerHeight()/-2;
        $('#popup').css({
            'margin-left': q_width,
            'margin-top': q_height
        });
        //выводим затемение страницы и делаем полупрозрачным
        $('body').append('<div id="fade"></div>');
        $('#fade').css({'filter' : 'alpha(opacity=40)'}).fadeIn();
        return false;
    });

    //функция закрытия окна
    $('#popup_close, #fade').live('click', function() {
        $('#fade').fadeOut(function() {
            $('#fade').remove();
            $('#popup_close').remove();
            $('#popup').fadeOut();
        });
    });

});