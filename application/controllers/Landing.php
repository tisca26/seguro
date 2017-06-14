<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
	    $this->load->library('business/Marca');
	    $data['marcas'] = $this->marca->marcas_todos();
		$this->cargar_idioma->carga_lang('landing/landing_page');
		$this->load->view('landing/landing_page', $data);
	}

	public function submarcas_por_marca($idmarcas = 0)
    {
        $submarcas = array();
        if (intval($idmarcas) > 0){
            $this->load->library('business/Marca');
            $submarcas = $this->marca->modelos_por_idmarca($idmarcas);
        }
        header('Content-Type: application/json');
        echo json_encode($submarcas);
    }


}
