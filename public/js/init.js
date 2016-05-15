function check(){
	if(document.DSfrm.tenGC.value == "") {
		$('#tenGC').notify("Tên ghi chú rỗng");
		return false;
	}
	if(document.DSfrm.chuDe.value == "") {
		$('#chuDe').notify("Chủ đề rỗng");
		return false;
	}
	if(document.DSfrm.link.value == "") {
		$('#link').notify("Địa chỉ rỗng");
		return false;
	}
	return true;	
}
function thayDoi(){
	if(document.DMKfrm.mkc.value == "") {
		$('#mkc').notify("Mật khẩu hiện tại rỗng");
		return false;
	}
	if(document.DMKfrm.mkm.value == "") {
		$('#mkm').notify("Mật khẩu mới rỗng");
		return false;
	}
	if(document.DMKfrm.xnmk.value == "") {
		$('#xnmk').notify("Xác nhận mật khẩu rỗng");
		return false;
	}
	if(document.DMKfrm.xnmk.value != document.DMKfrm.mkm.value) {
		$('#xnmk').notify("Vui lòng nhập đúng như trên");
		return false;
	}
	return true;	
}
function NotifySuccess(msg) {
	$.notify(msg, 'success');
}
function NotifyError(msg) {
	$.notify(msg, 'error');
}
function Location(url) {
	setTimeout(function() {
		window.location = url;
	}, 2000);
}