<div class="col s12 z-depth-1" style="background:#ffffff;">
	<div class="right-align">
		<ul class="collapsible" style="margin-top:0;">
			<li class="no-padding"><a class="dropdown-item" data-activates="dropItem">
			<?php echo 'Chào '.$this->session->userdata('tenNDung'); ?><i class="mdi-navigation-arrow-drop-down right"></i></a></li>
			<ul id='dropItem' class='dropdown-content'>
				<li><a class="modal-trigger" href="#modalMKhau">Đổi mật khẩu</a></li>
				<li><a href="dang-xuat">Đăng xuất</a></li>
			</ul>
		</ul>
	</div>
</div>
<div id="modalMKhau" class="modal">
	<form method="post" action="thay-doi" name="DMKfrm">
		<div class="modal-content">
			<h5>Đổi mật khẩu</h5>
			<div class="input-field col s12">
				<input id="mkc" type="password" name="mkc">
				<label for="mkc">Mật khẩu hiện tại</label>
			</div>
			<div class="input-field col s12">
				<input id="mkm" type="password" name="mkm">
				<label for="mkm">Mật khẩu mới</label>
			</div>
			<div class="input-field col s12">
				<input id="xnmk" type="password" name="xnmk">
				<label for="xnmk">Xác nhận mật khẩu</label>
			</div>
		</div>
		<div class="modal-footer">
			<a class="modal-close waves-effect waves-green btn-flat">Thoát</a>
			<button class="btn-flat waves-effect waves-light" type="submit" name="btn_smt" value="save" onclick="return thayDoi()">
				Thay đổi
			</button>
		</div>
	</form>
</div>
<script type="text/javascript">
	$('.dropdown-item').dropdown({
		inDuration: 300,outDuration: 225,constrain_width: true,hover: true,gutter: -29,belowOrigin: true,alignment: 'left'
	});
</script>