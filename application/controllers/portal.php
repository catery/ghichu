<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function index() {

		if($this->session->userdata('isLogged') == true) {

			redirect('danh-sach');

		} else {

			redirect('dang-nhap');
		}

	}

	public function dangnhap() {

		$data['title'] = 'Đăng nhập hệ thống';

		$this->load->view('partials/login', isset($data) ? $data : NULL);

	}

	public function xacnhan() {

		$u = $this->input->post('userAccount');
		$p = $this->input->post('passWord');

		$q = $this->truycap_model->ktra_Nguoidung($u, $p);
		
		if($q) {
			foreach($q as $row) {
				$data = array(
					'tenNDung' => $row->tenTruyCap,
					'maTruyCap' => $row->taiKhoan,
					'isLogged' => true
				);
				$this->session->set_userdata($data);
			}
			if($this->session->userdata('isLogged') == true) {
				redirect('danh-sach');
			} else {
				redirect('dang-nhap');
			}
		} else {
			$this->session->set_flashdata('flashError', 'Lỗi truy cập');
			redirect('dang-nhap');
		}

	}

	public function doimatkhau() {

		$u = $this->session->userdata('maTruyCap');
		$p = $this->input->post('mkc');

		$q = $this->truycap_model->ktra_Nguoidung($u, $p);
		
		if($q) {

			$np = $this->input->post('xnmk');

			$change = $this->truycap_model->thaydoi_matkhau($u, $np);

			if($change) {
				$this->session->set_flashdata('SuccessPass', 'Đổi mật khẩu thành công');
				redirect('danh-sach');
			} else {
				$this->session->set_flashdata('ErrorPass', 'Đổi mật khẩu thất bại');
				redirect('danh-sach');
			}

		} else {
			$this->session->set_flashdata('flashErrorPass', 'Tài khoản không tồn tại');
			redirect('danh-sach');
		}

	}

	public function logout() {

		if($this->session->userdata('isLogged') == true) {
			$this->session->unset_userdata('isLogged');
			$this->session->sess_destroy();
			redirect('dang-nhap');
		}

	}

	public function danhsach($page=15) {

		$ma = $this->session->userdata('maTruyCap');

		if($this->input->get('Key')) {

			$config['base_url'] = 'danh-sach/'.$page.'/'.$this->input->get('Key');
	        $config['first_url'] = GHICHU_BASE_URL.'/danh-sach/?Key='.$this->input->get('Key');
	        $config['suffix'] = '?'.http_build_query($this->input->get(), '', "&");
	        $config['per_page'] = $page;
	        $config['num_links'] = 3;
	        $config['uri_segment'] = 4;
	        $config['total_rows'] = $this->ghichu_model->dem_danhsach($ma, $this->input->get('Key'));
	        $config['full_tag_open'] = '<div class="pagination">';
	        $config['full_tag_close'] = '</div>';
	        $this->pagination->initialize($config);

			$data['template'] = 'partials/danhsach_ghichu';
			$data['title'] = 'Danh sách ghi chú';
			$data['record'] = $this->ghichu_model->hienthi_danhsach($ma, $this->input->get('Key'), $config['per_page'], $this->uri->segment(4));

		} else {

			$config['base_url'] = 'danh-sach/'.$page;
			$config['first_url'] = 'danh-sach';
	        $config['per_page'] = $page;
	        $config['num_links'] = 3;
	        $config['total_rows'] = $this->ghichu_model->dem_danhsach($ma, '');
	        $config['full_tag_open'] = '<div class="pagination">';
	        $config['full_tag_close'] = '</div>';
	        $this->pagination->initialize($config);

			$data['template'] = 'partials/danhsach_ghichu';
			$data['title'] = 'Danh sách ghi chú';
			$data['record'] = $this->ghichu_model->hienthi_danhsach($ma, '', $config['per_page'], $this->uri->segment(3));

		}

		$this->load->view('templates/layouts', isset($data) ? $data : NULL);

	}

	public function taomoi() {

		$ma = $this->session->userdata('maTruyCap');

		if($this->input->post('btn_smt') == 'save') {

			$ten = $this->input->post('tenGC');
			$muc = $this->input->post('chuDe');
			$dchi = $this->input->post('link');
			$ghichu = $this->input->post('chuThich');

			$ktra= $this->ghichu_model->kiemtra_tontai($ten, $ma);

			if($ktra) {
				$this->session->set_flashdata('ErrorExist', 'Ghi chú đã tồn tại');
				redirect('tao-moi');
			} else {
				$q = $this->ghichu_model->create($ten, $muc, $dchi, $ghichu, $ma);
				if($q) {
					$this->session->set_flashdata('Success', 'Thêm mới thành công');
					redirect('tao-moi');
				} else {
					$this->session->set_flashdata('Error', 'Thêm mới thất bại');
					redirect('tao-moi');
				}
			}

		} else {

			$data['template'] = 'partials/themmoi_ghichu';
			$data['title'] = 'Thêm mới';

			$this->load->view('templates/layouts', isset($data) ? $data : NULL);

		}

	}

	public function capnhat($id) {

		$ma = $this->session->userdata('maTruyCap');
		
		if($this->input->post('btn_smt') == 'save') {

			$ten = $this->input->post('tenGC');
			$muc = $this->input->post('chuDe');
			$dchi = $this->input->post('link');
			$ghichu = $this->input->post('chuThich');
			
			$q = $this->ghichu_model->update($ten, $muc, $dchi, $ghichu, $id, $ma);
			if($q) {
				$this->session->set_flashdata('Success', 'Cập nhật thành công');
				redirect('cap-nhat/'.$id);
			} else {
				$this->session->set_flashdata('Error', 'Cập nhật thất bại');
				redirect('cap-nhat/'.$id);
			}

		} else {

			$data['template'] = 'partials/capnhat_ghichu';
			$data['title'] = 'Cập nhật';
			$data['record'] = $this->ghichu_model->lay_theoma($id);

			$this->load->view('templates/layouts', isset($data) ? $data : NULL);

		}

	}

	public function xoa($id) {

		$q = $this->ghichu_model->delete($id);
		if($q) {
			$this->session->set_flashdata('Success', 'Xóa thành công');
			redirect('danh-sach');
		} else {
			$this->session->set_flashdata('Error', 'Xóa thất bại');
			redirect('danh-sach');
		}

	}

}