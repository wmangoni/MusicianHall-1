<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller {

	private $page = 'messages';
	
	public function index()
	{
		//$this->output->enable_profiler(TRUE);
		$data['page'] = $this->page;
		$this->load->view('base', $data);
	}
}