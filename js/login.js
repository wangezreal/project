$("#login-btn").click(function () {
	$.ajax({
		'type': "POST",
		'url': "http://localhost/user/loginIn",
		'data': {
			username: $("#username").val(),
			password: $("#password").val(),
			remember:$("#remember").val()
		},
		'dataType':'json',
		'success' :function (data) {
			new NoticeJs({
				text: data.msg,
				position: 'topCenter',
			}).show();
			if (data.status){
				window.location.href = 'http://localhost/admin';
			}
		}
	});
})
