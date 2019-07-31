function xoauser(id) {
	$.ajax ({
		url : "index.php?controller=pages&action=xoa",
		type :"post",
		data : {
			id : id,
		},
		success : function (response) {
			const result = $.parseJSON(response);
			if(result.status)
			{
				$(`#row_${id}`).empty();
				$(`#result-delete-${id}`).html();
				$(`#result-delete-${id}`).html(result.mess);
				$(`#result-delete-${id}`).removeClass("alert-warning");
				$(`#result-delete-${id}`).addClass("alert-success");
				$(`#btn-delete-${id}`).remove();
				$(`#btn-cancel-${id}`).html("OK");
			}
			else {
				$(`#result-delete-${id}`).html();
				$(`#result-delete-${id}`).html(result.mess);
				$(`#result-delete-${id}`).removeClass("alert-warning");
				$(`#result-delete-${id}`).addClass("alert-danger");
			}
		}
	});
}
function datalist() {
	$.ajax ({
		url : "index.php?controller=pages&action=getdatalist",
		type : "get",
		success : function (response) {
			const result = $.parseJSON(response);
			for (var i = 0;i <= result.length - 1; i++) {
				// var createtd_id = document.createElement("td");
				// var createtd_hoten = document.createElement("td");
				// var createtd_tuoi = document.createElement("td");
				// createtd_id.innerHTML= result[i].id;
				// createtd_hoten.innerHTML= result[i].hoten;
				// createtd_tuoi.innerHTML= result[i].tuoi;
				// $(`#list`).append(`<tr id="row_${result[i].id}"></tr>`);
				// $(`#row_${result[i].id}`).append(createtd_id);
				// $(`#row_${result[i].id}`).append(createtd_hoten);
				// $(`#row_${result[i].id}`).append(createtd_tuoi);
				$(`#list`).append(`<tr id="row_${result[i].id}">
					<td>${result[i].id}</td>
					<td>${result[i].hoten}</td>
					<td>${result[i].tuoi}</td>
					<td>
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal${result[i].id}" style="width: 90px; height: 30px ; font-size: 12px; float: center;">Xoá bảng</button>
					</td>
					<td>
						<a href="?controller=pages&action=update&id=${result[i].id}">Chỉnh sửa</a>
					</td>
				</tr>`);
				$(`#list`).append(`<div id="myModal${result[i].id}" class="modal fade" role="dialog">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h4 class="modal-title">Yêu cầu nho nhỏ :))</h4>
						      </div>
						      <div class="modal-body">
						        <div class="alert alert-warning" id="result-delete-${result[i].id}">Bạn có muốn xoá database hay không?</div>
						      </div>
						      <div class="modal-footer">
						         <button id="btn-delete-${result[i].id}" type="button" onclick="xoauser(${result[i].id});" class="btn btn-default" style="color: green">Có</button>
						        <button id="btn-cancel-${result[i].id}" type="button" class="btn btn-default" data-dismiss="modal">Không</button>
						      </div>
						    </div>
						  </div>
				</div>`)
			}
		}
	});
}

$(window).on("load" , datalist )
function alo() {
	alert('1');
}