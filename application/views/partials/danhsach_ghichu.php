<?php
	if($this->session->userdata('isLogged') == true) {
		if($this->session->flashdata('SuccessPass')) {
?>
		<script type="text/javascript">
			$(document).ready(function(){
				NotifySuccess('Đổi mật khẩu thành công');
			});
			Location('dang-nhap');
		</script>
<?php
		}
		if($this->session->flashdata('flashErrorPass')) {
?>
		<script type="text/javascript">
			$(document).ready(function(){
				NotifyError('Tài khoản không tồn tại');
			});
		</script>
<?php
		}
		if($this->session->flashdata('ErrorPass')) {
?>
		<script type="text/javascript">
			$(document).ready(function(){
				NotifyError('Đổi mật khẩu thất bại');
			});
		</script>
<?php
		}
		if($this->session->flashdata('Success')) {
?>
		<script type="text/javascript">
			$(document).ready(function(){
				NotifySuccess('Xóa thành công');
			});
		</script>
<?php
		}
		if($this->session->flashdata('Error')) {
?>
		<script type="text/javascript">
			$(document).ready(function(){
				NotifyError('Xóa thất bại');
			});
		</script>
<?php
		}
?>
<!--Mobile-->
<div class="mbile">
	<a href="tao-moi" class="waves-effect waves-light btn">Thêm mới<i class="material-icons right">add_circle_outline</i></a>
	<a href="portal/danhsach" class="waves-effect waves-light btn">Làm mới<i class="material-icons right">loop</i></a>
</div>
<div class="n-mbile">
	<a href="tao-moi" class="waves-effect waves-light btn">Thêm mới<i class="material-icons right">add_circle_outline</i></a>
	<a href="portal/danhsach" class="waves-effect waves-light btn">Làm mới<i class="material-icons right">loop</i></a>
</div>
<div class="input-field col s12">
	<form name="frmSrch" method="get" action="portal/danhsach">
		<input id="Key" type="text" name="Key">
		<label for="Key">Tìm kiếm...</label>
	</form>
</div>
<div class="nmtable col s12">
<?php
		if (isset($record) && count($record) > 0) {
			echo $this->pagination->create_links();
		}
?>
	<table class="striped">
		<thead>
			<tr>
				<th>Tên ghi chú</th>
				<th>Chủ đề</th>
				<th>Địa chỉ</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
<?php
		if(isset($record) && count($record) > 0) {
			foreach($record as $row){
?>
			<tr>
				<td><?php echo wordwrap ($row->tenGhiChu,100,"<br>\n",TRUE); ?></td>
				<td><?php echo $row->danhMuc; ?></td>
				<td>
					<a href="<?php echo $row->diaChi; ?>" target="_blank">
						<i class="material-icons">language</i>
					</a>
				</td>
				<td>
					<a href="cap-nhat/<?=$row->id?>" title="Hiệu chỉnh"><i class="material-icons">mode_edit</i></a>&nbsp;
	            	<a class="modal-trigger" title="Xóa" href="#modal<?=$row->id?>"><i class="material-icons">delete</i></a>
					<div id="modal<?=$row->id?>" class="modal">
						<div class="modal-content">
							<center><p><h5 style="color:#d32f2f;">Bạn chắc muốn xóa [&nbsp;<?php echo substr($row->tenGhiChu, 0, 50); ?>&nbsp;]&nbsp;?</h5></p></center>
						</div>
						<div class="modal-footer">
							<a class="modal-close waves-effect waves-green btn-flat">Thoát</a>
							<a href="xoa/<?=$row->id?>" class="modal-action modal-close waves-effect waves-green btn-flat">Đồng ý</a>
						</div>
					</div>
				</td>
			</tr>
<?php
			}
		} else {
?>
			<tr>
				<td colspan="4">Không có ghi chú nào...</td>
			</tr>
<?php
		}
?>
		</tbody>
	</table>
</div>
<div class="mtable col s12">
<?php
		if (isset($record) && count($record) > 0) {
			echo $this->pagination->create_links();
		}
?>
	<table class="striped">
		<thead>
			<tr>
				<th>Tên ghi chú</th>
				<th>Địa chỉ</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
<?php
		if(isset($record) && count($record) > 0) {
			foreach($record as $row){
?>
			<tr>
				<td><?php echo wordwrap ($row->tenGhiChu,15,"<br>\n",TRUE); ?></td>
				<td>
					<a href="<?php echo $row->diaChi; ?>" target="_blank">
						<i class="material-icons">language</i>
					</a>
				</td>
				<td>
					<a href="cap-nhat/<?=$row->id?>" title="Hiệu chỉnh"><i class="material-icons">mode_edit</i></a>&nbsp;
	            	<a class="modal-trigger" title="Xóa" href="xoa/<?=$row->id?>"><i class="material-icons">delete</i></a>
				</td>
			</tr>
<?php
			}
		} else {
?>
			<tr>
				<td colspan="4">Không có ghi chú nào...</td>
			</tr>
<?php
		}
?>
		</tbody>
	</table>
</div>
<?php
	} else {
		redirect('dang-nhap');
	}
?>