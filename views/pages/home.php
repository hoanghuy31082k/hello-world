<table class="table">
	<h1>Danh sách thành viên</h1>
	<thead>
		<tr>
			<th>ID</th>
			<th>Tên</th>
			<th>Tuổi</th>
		</tr>
	</thead>
	<tbody id="list"></tbody>
	<tfoot>
		<form action="?controller=pages&action=them" method="POST">
			<tr>
				<td><input type="text" name="id" placeholder="Nhập id"></td>
				<td><input type="text" name="hoten" placeholder="Nhập tên"></td>
				<td><input type="text" name="tuoi" placeholder="Nhập tuổi"></td>
				<td><a href="?controller=pages&action=them"><input type="submit" name="add" value="Thêm"></a></td>
			</tr>
		</form>
	</tfoot>
</table>
<script type="text/javascript" src="asset/js/dauphongdauphay.js"></script>