<?php

class LaporanModel extends CI_Model
{
    public function kunjungan_poliklinik($tahun)
    {
        $this->db->select('id_pendaftaran, id_poliklinik, COUNT(id_poliklinik) as totalkunjung');
        $this->db->where('tgl_berobat', $tahun);
        $this->db->group_by('id_poliklinik');
        $this->db->order_by('totalkunjung', 'desc');
        $q = $this->db->get('tbl_pendaftaran');
        return $q;
    }
}
