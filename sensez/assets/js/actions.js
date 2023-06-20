
jQuery(document).ready(function($){


  /**
   * giftSubmit
   */

  if($('#giftSubmit').length)
    $('#giftSubmit').validate({

      submitHandler: function(form) {

        var data = $('#giftSubmit').serialize()
        $.ajax({
          url: '/wp-admin/admin-ajax.php',
          data: data,
          type: 'POST',
          dataType: 'json',
          success:function(data){
              if (data) {
                console.log(data)

                if (data.msg) {
                  $('.result').html(data.msg)
                } else {
                  location.href = data.url
                }
            }
          }
        });
      }


    });

  /**
   * add-to-cart
   */

  $('.add-to-cart').click(function(e){
    e.preventDefault();
    var product_id = $(this).attr('data-product_id')
    var result_id = Cookies.get('result_id');

    $.ajax({
      url: '/wp-admin/admin-ajax.php',
      data: {
        action : 'add_to_cart',
        product_id : product_id,
        result_id : result_id,
      },

      dataType: 'json',
      success:function(data){
        if (data) {
          console.log(data)

          location.href = data.url
        }
      }
    });

  })


  /**
   * registration
   */

  if($('#regForm').length)
    $('#regForm').validate({

      submitHandler: function(form) {

        var data = $('#regForm').serialize()
        $.ajax({
          url: '/wp-admin/admin-ajax.php',
          data: data,
          type: 'POST',
          dataType: 'json',
          success:function(data){
            if (data) {
              console.log(data)


              location.href = data.url
            }
          }
        });

      }

    });

  /**
   * formGift create
   */


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

              // $('.gift-success input').val(data.id)
              // $('.gift-success').submit()

              location.href = data.url
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



  $(document).on('saveData', function(){

      answersCookie = an ? an : {};
      $('#test_questions li input[data-id]').each(function(){
        var id = $(this).attr('data-id')
        var val = $(this).val()
        if (val && id > 0)
          answersCookie['p'+ page + '-' + id] = $(this).val()
      })

      Cookies.set('an', JSON.stringify(answersCookie))
      // Cookies.set('an', answersCookie);
      console.log(answersCookie)


  })

  /**
   * submitQuiz
   */
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

          Cookies.remove('an')
           location.href = data.url
        }
      }
    });

  })




});

