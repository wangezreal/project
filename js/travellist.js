$("#done-btn").click(function () {
	$.ajax({
		'type': "POST",
		'url': "http://localhost/travel/finishtravel",
		'dataType':'json',
		'success' :function (data) {
			if(data.status){
				location.reload();
			}else {
				if (confirm('青春正好想要去玩吗?')){
					window.location.href = 'http://localhost/travel/addtravel';
				}else {
					window.location.href = 'http://localhost/admin';
				}
			}
		}
	});
})
$(".del_btn").click(function () {
	var arr = $(this).attr('value').split('-');
	$.ajax({
		'type': "POST",
		'url': "http://localhost/travel/deltravel",
		'dataType':'json',
		'data':{
		user_id:arr[0],
		cid:arr[1]
		},
		'success' :function (data) {
			location.reload();
		}
	});
})
