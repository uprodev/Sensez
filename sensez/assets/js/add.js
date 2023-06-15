jQuery(document).ready(function($) { 
	function test_4_steps() {

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
					let result = $.parseJSON(data); 
					document.cookie = "result_id=" + result[0] + "; path=/";
					window.location.href = result[1];
				} else {
					console.log('Error!');
				}
			}
		});
	}

	$(document).on('change', '.four-steps-orientation input', function (e){
		test_4_steps();
	});


	function test_questions() {

		let items = $('#test_questions li input');
		let questions = [];
		let answers = [];

		for (let i = 0; i < items.length; i++) {
			questions.push(items[i].getAttribute('post_id'));
			answers.push(items[i].value);
		}

		let data = {
			'action': 'test_questions',
			'questions': questions,
			'answers': answers,
		}

		$.ajax({
			url: '/wp-admin/admin-ajax.php',
			data: data,
			type: 'POST',
			success:function(data){
				if (data) {
					console.log(questions);
					console.log(answers);
				} else {
					console.log('Error!');
				}
			}
		});
	}

	$(document).on('submit', '#test_questions', function (e){
		test_questions();
	});
});