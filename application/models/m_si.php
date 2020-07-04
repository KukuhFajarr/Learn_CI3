<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_si extends CI_Model
{

    public function getData()
    {
        return $this->db->get('data_anggota')->result();
    }

    public function addData($nama, $usia)
    {
        $data = array(
            'nama' => $nama,
            'usia' => $usia
        );
        $this->db->insert('data_anggota', $data);
    }

    public function delData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_anggota');
    }

    public function getDataId($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('data_anggota')->result_array();
    }

    public function updateData($id, $nama, $usia)
    {
        $this->db->set('nama', $nama);
        $this->db->set('usia', $usia);
        $this->db->where('id', $id);
        $this->db->update('data_anggota');
    }
}
