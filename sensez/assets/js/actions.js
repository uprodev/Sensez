
jQuery(document).ready(function($){
  if($('#formGift').length)
    $('#formGift').validate({

      submitHandler: function(form) {

        var data = $('#formGift').serialize()
        $.ajax({
          url: '/wp-admin/admin-ajax.php',
          data: data,
          type: 'POST',
          dataType: 'json',
          success:function(data){
            if (data) {
              console.log(data)

             // location.href = data.redirect
            }
          }
        });

      }

    });


  // $('#test_questions input').change(function(){
  //   var id = $(this).attr('data-id')
  //   answersCookie[result_id][id] = $(this).val()
  //
  //   $.cookie('an', answersCookie);
  //
  //   console.log(answersCookie)
  // })

  $ = jQuery

  var an = Cookies.getJSON('an')
  console.log( an)

  $('#testChoices input').change(function(){
    answersCookie = an ? an : {};
    $('#test_questions li input[data-id]').each(function(){
      var id = $(this).attr('data-id')
      var val = $(this).val()
      if (val > 0 && id > 0)
        answersCookie['q' + id] = $(this).val()
    })

      Cookies.set('an', JSON.stringify(answersCookie))
    // Cookies.set('an', answersCookie);
    console.log(answersCookie)

  })

  $(document).on('submitQuiz', function(){


    $.ajax({
      url: '/wp-admin/admin-ajax.php',
      data: {
        action: 'submit_quiz',
        data :  Cookies.getJSON('an'),
        result_id: result_id
      },
      type: 'POST',
      dataType: 'json',
      success:function(data){
        if (data) {
          console.log(data)

          // location.href = data.redirect
        }
      }
    });

  })




});

