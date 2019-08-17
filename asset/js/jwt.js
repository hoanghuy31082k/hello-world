function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function clearResponse(){
    $('#response').html('');
}

function showLogin() {
	var html = `<caption>Đăng nhập</caption>
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
						<td><button onclick="checklogin();">Đăng nhập</button></td>
					</tr>
				</table>
				<h4 id="login-status"></h4>`;
	$('#content').html(html);
    clearResponse();
    showLogout();
}

function showLogout {
	
}