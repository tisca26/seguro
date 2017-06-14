<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Marcas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function ultimo_id()
    {
        return $this->db->insert_id();
    }

    public function error_consulta()
    {
        return $this->db->error();
    }

    public function marca_por_id($idmarcas = 0)
    {
        $obj = null;
        $q = $this->db->where('idmarcas', $idmarcas)->get('marcas');
        if ($q->num_rows() > 0) {
            $obj = $q->row();
        }
        return $obj;
    }

    public function marcas_todos()
    {
        $res = array();
        $q = $this->db->order_by('nombre ASC')->get('marcas');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }
}