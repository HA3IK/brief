$(document).ready(function() {


  // Основной глобальный объект
  var baseObj = {
  				t: {
  					correct: false,
  					q: false
  				}
  			};


  /**
   * Проверка корректности запроса
   * @return:
   *   - подтверждение коректности формы
   *   - id билета
   */
  (function(){
  	var loc = window.location.search.substr(1),
  	    query = loc.split('=');

        if(query[0] === 't' && query[1].length === 13){
          baseObj.t.correct = true;
          baseObj.t.q = query[1];
  			}
  })();


  /**
   * Проверка разришения на отправку формы
   * @return {[type]} [description]
   */
  (function(){
    if(baseObj.t.correct){
      console.log('OPEN');
    }else{
      console.log('CLOSE');
      //TODO! Чтобы заполнение форму, нужно получить специальную ссылку. Свяжитесь с администратором: skype, email - для получение спец. ссылки
    }
  })();


  $.ajax({
        url: 'http://crossdomainajax/index.php',
        type: 'POST',
        crossDomain: true,
        cache: false,
        dataType: 'json',
        data: 'test=my_test!!!!!!!!!!!!!!!',
        success: function(json){
        	console.log(json);
        },
        error: function(){
        	//obj.report('<p><b>Произошла ошибка с ответом сервера</b>.<br/>Пожалуйста, сообщите об этом <a href="#adm@mail.net">администратору сайта</a>.<br/>Извините за предоставленные неудобства.</p>');
        }
    });


    /**
     * Отмечаем элементы checkbox в разделе выбора языков
     * @description  По нажатию на 1вый элемент checkbox ("Всі") - отмечаются/снимаются все checkbox-ы языков
     */
    $('input[name^=multilanguage]').first().click(function(){
    	if(this.checked){
    	  $('input[name^=multilanguage]').prop('checked', true);
    	}else{
    	  $('input[name^=multilanguage]').prop('checked', false);
    	}
    });

});