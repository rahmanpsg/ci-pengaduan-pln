<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->db->query("SET sql_mode = '' ");
	}

	public function index()
	{
		$this->load->view('public/index');
	}

	public function pengaduan()
	{
		$this->load->view('public/pengaduan');
	}
}
