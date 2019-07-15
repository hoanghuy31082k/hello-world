<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Tên</th>
			<th>Tuổi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php foreach ($req as $row): ?>
				<td><?php echo $row["ID"]; ?></td>
				<td><?php echo $row["TEN"]; ?></td>
				<td><?php echo $row["TUOI"]; ?></td>
			<?php endforeach ?>
		</tr>
	</tbody>
</table>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Xoá bảng</button>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Yêu cầu nho nhỏ :))</h4>
      </div>
      <div class="modal-body">
        <p>Bạn có muốn xoá database hay không?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" style="color: Green" data-dismiss="modal">Có</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
      </div>
    </div>

  </div>
</div>