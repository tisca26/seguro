<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->cargar_idioma->carga_lang('landing/landing_page');
		$this->load->view('landing/landing_page');
	}
}
