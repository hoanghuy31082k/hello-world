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
		type :"post",
		data : {
			id : id,
			ten : hoten,
			tuoi : tuoi
		},
		success : function (response) {
			const result = $.parseJSON(response);
			document.write(result);
	});
}