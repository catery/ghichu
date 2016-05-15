<?php
	if($this->session->userdata('isLogged') == true) {
		if($this->session->flashdata('Success')) {
?>
		<script type="text/javascript">
			$(document).ready(function(){
				NotifySuccess('Cập nhật thành công');
			});
		</script>
<?php
		}
		if($this->session->flashdata('Error')) {
?>
		<script type="text/javascript">
			$(document).ready(function(){
				NotifyError('Cập nhật thất bại');
			});
		</script>
<?php
		}
		if(isset($record) && count($record) > 0){
?>
<form method="post" action="cap-nhat/<?php echo $record['id']; ?>" name="DSfrm">
	<!--Mobile-->
	<div class="mbile">
		<a href="danh-sach" class="waves-effect waves-light btn">Thoát<i class="material-icons right">reply</i></a>
		<button class="btn waves-effect waves-light" type="submit" name="btn_smt" value="save" onclick="return check()">
			Lưu lại<i class="material-icons right">save</i>
		</button>
	</div>
	<div class="n-mbile">
		<a href="danh-sach" class="waves-effect waves-light btn">Thoát<i class="material-icons right">reply</i></a>
		<button class="btn waves-effect waves-light" type="submit" name="btn_smt" value="save" onclick="return check()">
			Lưu lại<i class="material-icons right">save</i>
		</button>
	</div>
	<div class="clear-fix"></div>
	<div class="col s12 z-depth-1">
		<div class="input-field col s12">
			<input id="tenGC" type="text" name="tenGC" value="<?php echo $record['tenGhiChu']; ?>">
			<label for="tenGC">Tên ghi chú</label>
		</div>
		<div class="input-field col s6">
			<input id="chuDe" type="text" name="chuDe" value="<?php echo $record['danhMuc']; ?>">
			<label for="chuDe">Chủ đề</label>
		</div>
		<div class="input-field col s6">
			<input id="link" type="text" name="link" value="<?php echo $record['diaChi']; ?>">
			<label for="link">Địa chỉ Link</label>
		</div>
		<div class="input-field col s12">
			<textarea id="chuThich" name="chuThich" class="materialize-textarea"><?php echo $record['chuThich']; ?></textarea>
          	<label for="chuThich">Ghi chú</label>
		</div>
	</div>
</form>
<?php
		} else {
			redirect('danh-sach');
		}
	} else {
		redirect('dang-nhap');
	}
?>