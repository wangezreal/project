$('#pageLimit').bootstrapPaginator({
	currentPage: page,//当前的请求页面。
	totalPages: pagecount,//一共多少页。
	size:"normal",//应该是页眉的大小。
	bootstrapMajorVersion: 3,//bootstrap的版本要求。
	alignment:"right",
	numberOfPages:10,//一页列出多少数据。
	itemTexts: function (type, page, current) {//如下的代码是将页眉显示的中文显示我们自定义的中文。
		switch (type) {
			case "first": return "首页";
			case "prev": return "上一页";
			case "next": return "下一页";
			case "last": return "末页";
			case "page": return page;
		}
	}
});
$('#pageLimit a').click(function () {
	var tpage = $('#pageLimit .active a').html();
	window.location.href = 'http://localhost/travel/index/'+tpage;
})
