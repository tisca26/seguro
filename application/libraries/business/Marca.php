<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Marca
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('marcas_model');
        $this->CI->load->model('modelos_model');
    }

    public function ultimo_id()
    {
        return $this->CI->marcas_model->ultimo_id();
    }

    public function error_consulta()
    {
        return $this->CI->marcas_model->error_consulta();
    }

    public function marcas_todos()
    {
        return $this->CI->marcas_model->marcas_todos();
    }

    public function marcas_todos_json()
    {
        $marcas = $this->marcas_todos();
        return json_encode($marcas);
    }

    public function modelos_todos()
    {
        return $this->CI->modelos_model->modelos_todos();
    }

    public function modelos_por_idmarca($idmarcas = 0)
    {
        return $this->CI->modelos_model->modelos_por_idmarca($idmarcas);
    }

    public function modelos_todos_json()
    {
        $modelos = $this->modelos_todos();
        return json_encode($modelos);
    }
}