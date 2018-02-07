$("#res-btn").click(function () {
	if ($("#password").val()== $("#password1").val()){
		$.ajax({
			'type': "POST",
			'url': "http://localhost/user/adduser",
			'data': {
				user_name: $("#username").val(),
				password: $("#password").val(),
				name:$("#name").val(),
				sex:$(".radio-inline input:radio:checked").val(),
				id_card:$("#idcard").val(),
				email:$("#mail").val(),
				phone_number:$("#phone").val(),
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
	}else {
		new NoticeJs({
			text: "密码不一致",
			position: 'topCenter',
		}).show();
	}
})
