jQuery(document).ready(function($) { 
	function test_4_steps() {
		//e.preventDefault();

		let _this = $(this);

		let data = {
			'action': 'test_4_steps',
			'relation': $('input[name="relations"]:checked').val(),
			'age': $('input[name="age"]:checked').val(),
			'gender': $('input[name="gender"]:checked').val(),
			'orientation': $('input[name="orientation"]:checked').val(),
		}

		$.ajax({
			url: '/wp-admin/admin-ajax.php',
			data: data,
			type: 'POST',
			success:function(data){
				if (data) {
					window.location.href = data;
				} else {
					console.log('Error!');
				}
			}
		});
	}

	$(document).on('change', '.four-steps-orientation input', function (e){
		test_4_steps();
	});
});