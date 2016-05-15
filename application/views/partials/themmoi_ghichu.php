<?php
	if($this->session->userdata('isLogged') == true) {
		if($this->session->flashdata('ErrorExist')) {
?>
		<script type="text/javascript">
			$(document).ready(function(){
				NotifyError('Tên bài viết đã tồn tại');
			});
		</script>
<?php
		}
		if($this->session->flashdata('Success')) {
?>
		<script type="text/javascript">
			$(document).ready(function(){
				NotifySuccess('Thêm mới thành công');
			});
		</script>
<?php
		}
		if($this->session->flashdata('Error')) {
?>
		<script type="text/javascript">
			$(document).ready(function(){
				NotifyError('Thêm mới thất bại');
			});
		</script>
<?php
		}
?>
<form method="post" action="tao-moi" name="DSfrm">
	<!--Mobile-->
	<div class="mbile">
		<a href="portal/danhsach" class="waves-effect waves-light btn">Thoát<i class="material-icons right">reply</i></a>
		<button class="btn waves-effect waves-light" type="submit" name="btn_smt" value="save" onclick="return check()">
			Lưu lại<i class="material-icons right">save</i>
		</button>
	</div>
	<div class="n-mbile">
		<a href="portal/danhsach" class="waves-effect waves-light btn">Thoát<i class="material-icons right">reply</i></a>
		<button class="btn waves-effect waves-light" type="submit" name="btn_smt" value="save" onclick="return check()">
			Lưu lại<i class="material-icons right">save</i>
		</button>
	</div>
	<div class="clear-fix"></div>
	<div class="col s12 z-depth-1">
		<div class="input-field col s12">
			<input id="tenGC" type="text" name="tenGC">
			<label for="tenGC">Tên ghi chú</label>
		</div>
		<div class="input-field col s6">
			<input id="chuDe" type="text" name="chuDe">
			<label for="chuDe">Chủ đề</label>
		</div>
		<div class="input-field col s6">
			<input id="link" type="text" name="link">
			<label for="link">Địa chỉ Link</label>
		</div>
		<div class="input-field col s12">
			<textarea id="chuThich" class="materialize-textarea" name="chuThich"></textarea>
          	<label for="chuThich">Ghi chú</label>
		</div>
	</div>
</form>
<?php
	} else {
		redirect('dang-nhap');
	}
?>