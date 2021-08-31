<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public $nama, $notifikasi;

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->db->query("SET sql_mode = '' ");

        if (!$this->session->has_userdata('hasLogin')) {
            redirect('/');
        } else
        if ($this->session->userdata('level') !== 'admin') {
            $level = $this->session->userdata('level');
            redirect("$level/");
        }

        $this->nama = 'Administrator';
    }

    public function index()
    {
        $this->load->view('admin/index');
    }

    public function pelanggan()
    {
        $data['TBL_URL'] = base_url('api/pelanggan');

        $this->load->view('admin/pelanggan', $data);
    }

    public function pengaduan()
    {
        $data['TBL_URL'] = base_url('api/pengaduan');

        $this->load->view('admin/pengaduan', $data);
    }

    public function petugas()
    {
        $data['TBL_URL'] = base_url('api/petugas');

        $this->load->view('admin/petugas', $data);
    }

    public function chat()
    {
        $this->load->view('admin/chat');
    }

    public function laporan()
    {
        $this->load->view('admin/laporan');
    }
}
