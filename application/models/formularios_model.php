<?php

class formularios_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }	
   /*-----------  TIPO NIVEL ACADEMICO  -----------------*/	
    public function mSaveTna($dataTna=array(),$nomTna)
    {	
        $where=array('tna_nom'=>$nomTna);
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
            $this->db->insert("tipo_nivel_academico",$dataTna);						
            return $query->result();		
        }		 
    }
    public function mSearchTna($nomTna)
    {
        $query=$this->db
        ->select("tna_cod,tna_nom")
        ->from("tipo_nivel_academico")
        ->like('tna_nom',$nomTna,'after')
        ->get();
        //echo $this->db->last_query();
        if($query->num_rows() > 0)
        {			
            return $query->result();
        }else{				
            return $query->result();	
        }
    }  /* 
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
      */
    public function listTna($di_tna=array())
    {		 
        $query=$this->db
        ->select("tna_cod,tna_nom")
        ->from("tipo_nivel_academico")
	->get();
        //echo $this->db->last_query();
        return $query->result();
    }
   /*
    public function eliminar_tna($di_tna=array())
    {		 
        $query=$this->db
        ->select("tna_cod,tna_nom")
        ->from("tipo_nivel_academico")
	->get();
        //echo $this->db->last_query();
        return $query->result();
    }*/
}