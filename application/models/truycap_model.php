<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Truycap_model extends CI_Model {

	public function ktra_Nguoidung($u, $p) {

		$q = $this->db->get_where('truycap', array('taiKhoan'=>convert_cthuong($u), 'matKhau'=>convert_mkhau($p)));
		if($q->num_rows() == 1) {
			foreach($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}

	}

	public function thaydoi_matkhau($id,$pass) {

		$data = array(
			'matKhau' => convert_mkhau($pass)
		);

		$q = $this->db->where('taiKhoan', $id)->update('truycap', $data);
		return $q;
		
	}

}