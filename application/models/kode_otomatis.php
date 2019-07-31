<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class kode_otomatis extends CI_Model
{
	public function kode_mapel()
	{
		$this->db->select('Right(tbl_mapel.id_mapel,1) as id_mapel ',false);
            $this->db->order_by('id_mapel', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('tbl_mapel');

		if($query->num_rows()<>0){
        	$data = $query->row();
            $kode = intval($data->id_mapel)+1;
        }else{
            $kode = 1;

        }
	    $kodemax = str_pad($kode,1,STR_PAD_LEFT);
	    $kodejadi  = $kodemax;
	    return $kodejadi;
	}
	public function kode_nilai()
	{
		$this->db->select('Right(tbl_nilai.id_nilai,4) as id_nilai ',false);
            $this->db->order_by('id_nilai', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('tbl_nilai');

		if($query->num_rows()<>0){
        	$data = $query->row();
            $kode = intval($data->id_nilai)+1;
        }else{
            $kode = 1;

        }
	    $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
	    $kodejadi  = "N".$kodemax;
	    return $kodejadi;
	}

	public function kode_uh()
	{
		$this->db->select('Right(tbl_uh.kode_uh,3) as kode_uh ',false);
            $this->db->order_by('id_uh', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('tbl_uh');

		if($query->num_rows()<>0){
        	$data = $query->row();
            $kode = intval($data->kode_uh)+1;
        }else{
            $kode = 1;

        }
	    $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
	    $kodejadi  = "UH".$kodemax;
	    return $kodejadi;
	}
}