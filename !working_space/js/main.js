$(document).ready(function() {

  // Основной глобальный объект
  var baseObj = {
          // Константы доступа
          t: {
            correct: false,
            q: false
          },
          // Метод работы с AJAX
          ajax: function(query, fn){
            //TODO! Убрать!
            console.log('Отправляем: '+query);
            $.ajax({
              url: 'http://ajaxsync.96.lt/index.php',
              type: 'POST',
              crossDomain: true,
              cache: false,
              dataType: 'json',
              data: query,
              success: function(json){
                //TODO! Уборать!
                console.log('Ответ: '+json);
                fn(json);
              },
              error: function(){
                console.log('ERROR!');
                //TODO! Прописати повідомлення, що сталась ошибка
                //obj.report('<p><b>Произошла ошибка с ответом сервера</b>.<br/>Пожалуйста, сообщите об этом <a href="#adm@mail.net">администратору сайта</a>.<br/>Извините за предоставленные неудобства.</p>');
              }
            });
          }
    		};


  /**
   * Проверка корректности запроса
   * @return:
   *   - подтверждение коректности формы
   *   - id билета
   */
  var checkQuery = function(){
      	var loc = window.location.search.substr(1),
      	    query = loc.split('=');

            if(query[0] === 't' && /^[a-z0-9]{13}$/im.test(query[1])){
              baseObj.t.correct = true;
              baseObj.t.q = query[1];
      			}
      };


  // Первый ответ AJAX
  //   - разрешение заполнить форму
  var firstResponse = function(data){
        console.log('First Response');

        // В случае разрешения отображаем форму и прячем сообщение о спец. ссылке
        if(data === true){
          $('.wrap').show(0);
          $('.get_url').hide(0);

        // В случае исчерпаного лимита - выводим сообщение, что форма уже была заповнена
        }else if(data === 'over'){
          $('.get_url').hide(0);
          $('.get_url.step-2').show(0);
        }

        $('#modal').fadeOut();
      }


  var secondResponse = function(data){
        console.log('Second Response');
        console.log(data);

        $('.wrap').hide(0);

        if(data === true){
          $('.modal-verify_step').text('форма успішно відправлена!');
          $('.get_url.step-2')
            .html('<h2 class="get_url-title"><b>Форма бріфа успішно відправлена!</b><br>Вона буде переглянута адміністратором в найкоротший термін. <span class="space-nowrap">Спасибі за приділений час.</span></h2>')
            .show(0);
          // Викл. форму і написати: "Дякую, що заповнили форму бріфа. Вона буде переглянута адміністратором в найкоротший термін"
        }else if(data === false){
          $('.get_url.step-1').show(0);
        }else if(data === 'over'){
          $('.get_url.step-2').show(0);
        }

        $('#modal').fadeOut();
      }


  /**
   * Проверка разришения доступа
   * @return {[type]} [description]
   */
  var verify =  function(){
        // Запускаем проверку url
        checkQuery();

        if(baseObj.t.correct){
          // Описываем статус - получение доступа к форме
          $('.modal-verify_step').text('надання доступу…');
          baseObj.ajax('ticket='+baseObj.t.q, firstResponse);
        }else{
          $('#modal').fadeOut();
        }
      };


  // Запуск проверки разришения доступа
  setTimeout(function(){
      verify();
    },2000);


  // Функция отправки офрмы
  var sendForm = function(){
        // Запускаем проверку url
        checkQuery();

        if(baseObj.t.correct){
          // Подготавливаем запрос: даные с формы, нажатие submit, id билета
          var query = $('#brif-form').serialize()+'&brief_submit=TRUE&code='+baseObj.t.q;
          // Описываем статус - "подготовка формы"
          $('.modal-verify_step').text('підготовка форми…');

          setTimeout(function(){
            $('.modal-verify_step').text('відправка форми…');
            baseObj.ajax(query, secondResponse);
          }, 2000);

        }else{
          // Описываем статус - сообщаем об ошибке
          $('.modal-verify_step').text('помилка в посилані!');

          setTimeout(function(){
            $('#modal').fadeOut();
          }, 1000);
        }

        // Отображаем модульное окно
        $('#modal').fadeIn();
      };


  /**
   * Нажатие на кнопку "отправить" форму
   */
  $('.brief-submit').click(function(e) {
    e.preventDefault();
    // Предотвращение дабл-клика
    $(this).attr('disabled','disabled');
    setTimeout(function(){
      $('.brief-submit').removeAttr('disabled');
    }, 500);
    // Запускаєм функцию отправки формы
    sendForm();
  });


  /**
   * Отмечаем элементы checkbox в разделе выбора языков
   * @description  По нажатию на 1вый элемент checkbox - отмечаются/снимаются все checkbox-ы языков
   */
  $('input[name^=multilanguage]').first().click(function(){
  	if(this.checked){
  	  $('input[name^=multilanguage]').prop('checked', true);
  	}else{
  	  $('input[name^=multilanguage]').prop('checked', false);
  	}
  });

});