<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){

		$this->data["pageTitle"] = "Home";
		$this->load->view('home', $this->data);

	}
}
