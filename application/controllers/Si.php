<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Si extends CI_Controller
{
  function __construct()
  {
		parent::__construct();
		$this->load->model('m_si');
  }

    public function index()
    {
        $data['anggota'] = $this->m_si->getData();
        $this->load->view('latihan', $data);
    }
    public function create()
    {
        $this->load->view('form');
    }

    public function addData()
    {
        $nama = $this->input->post('nama');
        $usia = $this->input->post('usia');
        $this->m_si->addData($nama, $usia);
        redirect('si');
    }

    public function delete($id)
    {
        $this->m_si->delData($id);
        redirect('si');
    }

    public function getDataId($id)
    {
        $data['anggota'] = $this->m_si->getDataId($id);
        $this->load->view('update', $data);
    }

    public function updateData()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $usia = $this->input->post('usia');
        $this->m_si->updateData($id, $nama, $usia);
        redirect('si');
    }
}
