<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ghichu_model extends CI_Model {

    function lay_theoma($id) {

        $q = $this->db->get_where('ghichu', array('id'=>convert_ktrang($id)))->row_array();
        return $q;

    }

	function dem_danhsach($id, $k){

        $q = $this->db->where('maTruyCap', $id)->like('tenGhiChu', convert_cthuong($k))->get('ghichu')->num_rows();
        return $q;

    }

    function hienthi_danhsach($id, $k, $limit, $display){

        $q = $this->db->where('maTruyCap', $id)->like('tenGhiChu', convert_cthuong($k))->order_by('danhMuc', 'asc')->limit($limit, $display)->get('ghichu');
        if($q->num_rows()>0){
            foreach($q->result() as $row){
                $data[] = $row;
            }
            return $data;
        }

    }

    function kiemtra_tontai($chude, $ma) {
            
        $q = $this->db->get_where('ghichu', array('tenGhiChu'=>convert_ktrang($chude), 'maTruyCap'=>$id))->num_rows();
        if($q == 1) {
            return $q;
        } else {
            return false;
        }

    }

    function create($ten, $muc, $dchi, $ghichu, $ma) {

        $data = array(
            'tenGhiChu' => convert_ktrang($ten),
            'danhMuc' => convert_ktrang($muc),
            'diaChi' => convert_ktrang($dchi),
            'chuThich' => convert_ktrang($ghichu),
            'maTruyCap' => $ma
        );

        $q = $this->db->insert('ghichu', $data);

        return $q;
    }
    
    function update($ten, $muc, $dchi, $ghichu, $id, $ma) {

        $data = array(
            'tenGhiChu' => convert_ktrang($ten),
            'danhMuc' => convert_ktrang($muc),
            'diaChi' => convert_ktrang($dchi),
            'chuThich' => convert_ktrang($ghichu),
            'maTruyCap' => $ma
        );

        $q = $this->db->where('id', $id)->update('ghichu', $data);

        return $q;
    }

    public function delete($id) {

        $q = $this->db->where('id', convert_ktrang($id))->delete('ghichu');
        return $q;

    }

}