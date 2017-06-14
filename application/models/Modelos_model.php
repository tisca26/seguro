<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Modelos_model extends CI_Model
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

    public function modelo_por_id($idmodelos = 0)
    {
        $obj = null;
        $q = $this->db->where('idmodelos', $idmodelos)->get('modelos');
        if ($q->num_rows() > 0) {
            $obj = $q->row();
        }
        return $obj;
    }

    public function modelos_por_idmarca($idmarca = 0)
    {
        $obj = array();
        $q = $this->db->where('idmarcas', $idmarca)->get('modelos');
        if ($q->num_rows() > 0) {
            $obj = $q->result();
        }
        return $obj;
    }

    public function modelos_todos()
    {
        $res = array();
        $q = $this->db->order_by('nombre ASC')->get('modelos');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }
}