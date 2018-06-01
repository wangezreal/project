function getdata(page,pagesize,url) {
	var numall = (page-1)*pagesize;
	$.ajax({
		'type': "GET",
		'url': url+"?start="+numall+"&count="+pagesize,
		'dataType':'jsonp',
		'success' :function (data) {
			var pagecount = parseInt(data.total/pagesize)+1;
			$('#pageLimit').bootstrapPaginator({
				currentPage: tpage,//当前的请求页面。
				totalPages: pagecount,//一共多少页。
				size:"normal",//应该是页眉的大小。
				bootstrapMajorVersion: 3,//bootstrap的版本要求。
				alignment:"right",
				numberOfPages:pagesize,//一页列出多少数据。
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
			var subject = data.subjects;
			var html = "";
			for (x in subject){
				var bhtml = '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mblock"><div class="clickblock" url ="'+subject[x].alt+ '">'
				var imhtml = "<img src='"+subject[x].images.small+"'class='center-block'>";
				var typehtml = "<span style='color: #007bff'>"+subject[x].genres.join(',')+"</span>"
				var actstring = '';
				for (wx in subject[x].casts){
					actstring = actstring+subject[x].casts[wx].name+',';
				}
				actstring = actstring.substring(0,actstring.length-1);
				var pcommit = '<h4 style="color:orangered">评分：<span style="color: darkred">'+subject[x].rating.average+'</span></h4>';
				var acthtml = '<p style="height: 40px">主演:'+actstring+'</p>';
				var namethml = '<div class="caption"><h4 style=\'height:40px;overflow:hidden\'>'+subject[x].title+"  "+subject[x].year+"</h4>"+"<h4 style='color: #71dd8a;height:40px;overflow:hidden'>"+subject[x].original_title+"</h4>"+pcommit+typehtml+acthtml+"</div>"
				html = html+bhtml+imhtml+namethml+"</div></div>"
			}
			$("#cbody").html(html);
			$('#pageLimit a').click(function () {
				tpage = $('#pageLimit .active a').html();
				getdata(tpage,20,url);
			})
		}
	});
}

