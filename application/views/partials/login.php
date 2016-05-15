<?php
	if($this->session->userdata('isLogged') == true) {
		$this->session->unset_userdata('isLogged');
		$this->session->sess_destroy();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="content-language" content="vi"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title><?php echo convert_title($title); ?></title>
		<base href="<?php echo GHICHU_BASE_URL; ?>"/>
		<link rel="shortcut icon" href="public/icon/60ico.ico"/>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="public/css/materialize.min.css" media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="public/css/portal.css">
		<script type="text/javascript" src="public/js/check.js"></script>
		<script type="text/javascript" src="public/js/jquery.min.js"></script>
		<script type="text/javascript" src="public/js/materialize.min.js"></script>
		<script type="text/javascript" src="public/js/notify.js"></script>
		<?php
			if($this->session->flashdata('flashError')) {
		?>
		<script type="text/javascript">
			$(document).ready(function(){
				loiDNhap('Truy cập thất bại');
			});
		</script>
		<?php
			}
		?>
	</head>
	<body>
		<center>
			<div class="container z-depth-2">
				<div>
    				<h5 class="center-align" style="padding-top:10px; color:#757575;"><?php echo isset($title) ? $title : ''; ?></h5><hr style="width:60%;"/>
  				</div>
				<div class="row">
	    			<form name="loginForm" method="post" action="xac-nhan" class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<input id="userAccount" type="text" name="userAccount">
								<label for="userAccount">Tài khoản</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="passWord" type="password" name="passWord">
								<label for="passWord">Mật khẩu</label>
							</div>
						</div>
						<div class="row col s12" align="right">
							<button class="btn waves-effect waves-light" type="submit" onclick="return checkLogin()">Đăng nhập
    							<i class="material-icons right">send</i>
  							</button>
						</div>
	    			</form>
	    		</div>
			</div>
		</center>
	</body>
</html>