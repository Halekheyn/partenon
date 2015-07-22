<?php

class formularios_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }	
   /*-----------  TIPO NIVEL ACADEMICO  -----------------*/	
    public function insertar_tna($in_tna=array(),$nom)
    {	
        $where=array('tna_nom'=>$nom);
		$query=$this->db
        ->select("tna_nom")
        ->from("tipo_nivel_academico")
        ->where($where)
        ->get();
        //echo $this->db->last_query();
        if($query->num_rows() > 0)
        {			
            return $query->result();
        }else{
            $this->db->insert("tipo_nivel_academico",$in_tna);						
            return $query->result();		
        }		 
    }   
    public function buscar_tna($nom)
    {
        $query=$this->db
        ->select("tna_nom")
        ->from("tipo_nivel_academico")
        ->like('tna_nom',$nom,'after')
        ->get();
        echo $this->db->last_query();
        if($query->num_rows() > 0)
        {			
                return $query->result();
        }
        else
        {				
                return $query->result();	
        }
    }   
    public function act_id_tna($id_act)
    { 
        $where = array('tna_cod'=>$id_act);
        $query=$this->db
        ->select("tna_cod,tna_nom")
        ->from("tipo_nivel_academico")
        ->where($where)
        ->get();
        //echo $this->db->last_query();
        return $query->row();
    }

    public function actualizar_tna($datos_act=array(),$id_tna)
    {
        $this->db->where("id",$id_tna);		 
        $this->db->update("tipo_nivel_academico");
    	return true;
    }
      
    public function listar_tna($di_tna=array())
    {		 
        $query=$this->db
        ->select("tna_cod,tna_nom")
        ->from("tipo_nivel_academico")
	->get();
        //echo $this->db->last_query();
        return $query->result();
    }
   
    public function eliminar_tna($di_tna=array())
    {		 
        $query=$this->db
        ->select("tna_cod,tna_nom")
        ->from("tipo_nivel_academico")
	->get();
        //echo $this->db->last_query();
        return $query->result();
    }
}