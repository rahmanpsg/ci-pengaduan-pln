<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public $username, $nama;

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->db->query("SET sql_mode = '' ");

        if (!$this->session->has_userdata('hasLogin')) {
            redirect('/');
        } else
        if ($this->session->userdata('level') !== 'petugas') {
            $level = $this->session->userdata('level');
            redirect("$level/");
        }
        $this->username = $this->session->userdata('username');
        $this->db->select('nama');
        $this->nama = $this->db->get_where('tbl_user', ['username' => $this->username])->result()[0]->nama;
    }

    public function index()
    {
        $this->load->view('petugas/index');
    }

    public function pelanggan()
    {
        $data['TBL_URL'] = base_url('api/pelanggan');

        $this->load->view('petugas/pelanggan', $data);
    }

    public function pengaduan()
    {
        $data['TBL_URL'] = base_url('api/pengaduan');

        $this->load->view('petugas/pengaduan', $data);
    }

    public function akun()
    {
        $this->db->select('data, foto');
        $get = $this->db->get_where('tbl_user', ['username' => $this->username])->result();

        $data = array_map(function ($v) {
            $v->data = json_decode($v->data);
            return $v;
        }, $get)[0];

        $this->load->view('petugas/akun', $data);
    }
}
