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
	console.log(1);
	$.ajax ({
		url : "index.php?controller=pages&action=getdatalist",
		type : "get",
		success : function (response) {
			const result = $.parseJSON(response);
			for (var i = 0;i <= result.length - 1; i++) {
				var createtd_id = document.createElement("td");
				var createtd_hoten = document.createElement("td");
				var createtd_tuoi = document.createElement("td");
				createtd_id.innerHTML= result[i].id;
				createtd_hoten.innerHTML= result[i].hoten;
				createtd_tuoi.innerHTML= result[i].tuoi;
				$(`#list`).append(`<tr id="row_${result[i].id}"></tr>`);
				$(`#row_${result[i].id}`).append(createtd_id);
				$(`#row_${result[i].id}`).append(createtd_hoten);
				$(`#row_${result[i].id}`).append(createtd_tuoi);
			}
		}
	});
}

function alo() {
	alert('1');
}