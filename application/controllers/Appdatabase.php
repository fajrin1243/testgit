<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Appdatabase extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//isi construct
	}

	public function index()
	{
		$data['teman'] = $this->db->get('teman');
		$this->load->view('teman/table.php',$data);

	}

}