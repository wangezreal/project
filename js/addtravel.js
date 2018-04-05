$("#sub-btn").click(function () {
	$.ajax({
		'type': "POST",
		'url': "http://localhost/travel/addt",
		'data': {
			p_date: $("#pr_date").val(),
			pname:$("#province").val(),
			cityname:$("#city ").val(),
		},
		'dataType':'json',
		'success' :function (data) {
			new NoticeJs({
				text: data.msg,
				position: 'topCenter',
			}).show();
			if (data.status){
				window.location.href = 'http://localhost/travel';
			}
		}
	});
})
