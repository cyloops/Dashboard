<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitetech extends CI_Controller {
	function index(){
		$this->load->view('head');
		$this->load->view('techtree');
		$this->load->view('footer');
	}

	function get($id){
		$this->load->view('head');
		$this->load->view('get',array('id'=>$id));
		$this->load->view('footer');
	}
}
