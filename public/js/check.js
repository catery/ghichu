function checkLogin() {

	if(document.loginForm.userAccount.value == "") {
		$('#userAccount').notify("Tài khoản rỗng");			
		return false;
	}

	if(document.loginForm.passWord.value == "") {
		$('#passWord').notify("Mật khẩu rỗng");			
		return false;
	}

	return true;
}

function loiDNhap(msg) {
	$.notify(msg, 'error');
}
