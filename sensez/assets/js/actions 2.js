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
});

