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
	var html = `<div class="container">
				  <h2>Đăng nhập</h2>
				  <form>
				    <div class="form-group">
				      <label for="username">Tài khoản:</label>
				      <input type="text" class="form-control" id="username" placeholder="Nhập tài khoản" name="username">
				    </div>
				    <div class="form-group">
				      <label for="pwd">Mật khẩu:</label>
				      <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="pwd">
				    </div>
				    <div class="checkbox">
				      <label><input type="checkbox" name="remember"> Ghi nhớ đăng nhập</label>
				    </div>
				    <button type="submit" class="btn btn-default">Đăng nhập</button>
				  </form>
				</div>`;
	$('#content').html(html);
    clearResponse();
    showLogout();
}

function showhome() {
	var html = `<h2>Đây là trang home</h2>`;
	$('#content').html(html);
    clearResponse();
}

function showSignup() {
	var html = `<div class="container">
				  <h2>Đăng nhập</h2>
				  <form>
				    <div class="form-group">
				      <label for="username">Tài khoản:</label>
				      <input type="text" class="form-control" id="username" placeholder="Nhập tài khoản" name="username">
				    </div>
				    <div class="form-group">
				      <label for="pwd">Mật khẩu:</label>
				      <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="pwd">
				    </div>
				    <div class="form-group">
				      <label for="re-pwd">Nhập lại mật khẩu:</label>
				      <input type="password" class="form-control" id="re-password" placeholder="Nhập lại mật khẩu" name="re-pwd">
				    </div>
				    <button type="submit" class="btn btn-default">Đăng ký</button>
				  </form>
				</div>`;
	$('#content').html(html);
    clearResponse();
}
