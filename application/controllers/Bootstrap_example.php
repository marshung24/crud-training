<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bootstrap_example extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view('bootstrapExample');
	}
}
