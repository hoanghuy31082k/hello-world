<form method="POST">
	<caption>Đăng nhập</caption>
	<table>
		<tr>
			<td>Tài khoản: </td>
			<td><input type="text" name="username" placeholder="tài khoản"></td>
		</tr>
		<tr>
			<td>Mật khẩu </td>
			<td><input type="password" name="password" placeholder="mật khẩu"></td>
		</tr>
		<tr>
			<td><button onclick="checklogin(username,password);">Đăng nhập</button></td>
		</tr>
	</table>
	<h4 id="login-status"></h4>
</form>
<script type="text/javascript" src="asset/js/dauphongdauphay.js"></script>