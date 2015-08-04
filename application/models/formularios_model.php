<?php

class formularios_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }	
    /*-----------  TIPO NIVEL ACADEMICO  -----------------*/
    
    //----GUARDAR----
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
    
    //----BUSCAR----
    public function mSearchTna($nomTna,$queHago,$pag,$rowsPag)
    {
        switch ($queHago)
        {
            case 'limitSearch':
                $query=$this->db
                ->select('tna_cod,tna_nom')
                ->from('tipo_nivel_academico')
                ->like('tna_nom',$nomTna,'after')
                ->order_by('tna_nom')                
                ->limit($rowsPag,$pag)
                ->get();
                //echo $this->db->last_query();
                return $query->result();
            break;
           
            case 'allSearch':
                $query=$this->db
                ->select("tna_cod,tna_nom")
                ->from("tipo_nivel_academico")
                ->like('tna_nom',$nomTna,'after')
                ->count_all_results();
                //echo $this->db->last_query();
                return $query;
            break;
        }
    }
    
    //----Actualizar----
    /*public function actTna($codTna,$queHago,$regActTna)
    { 
        switch ($queHago)
        {
            case 'query':
                $where = array('tna_cod'=>$codTna);
                $query=$this->db
                ->select('tna_cod,tna_nom')
                ->from('tipo_nivel_academico')
                ->where($where)                        
                ->get();
                //echo $this->db->last_query();
                return $query->result();
            break;
            
            case 'update':
                $condicion = 'tna_cod = 1'; 
                $queryUpdate = $this->db->update_string('tipo_nivel_academico',$regActTna,$condicion);
                if($queryUpdate)
                {			
                    return true;
                }else{				
                    return false;	
                }           
            break;
        }
    } */  
   
    //----LISTAR----
    public function listTna($pag,$rowsPag,$queHago)
    {		 
        switch($queHago)
        {
            case 'limit':
                $query=$this->db
                ->select('tna_cod,tna_nom')
                ->from('tipo_nivel_academico')
                ->order_by('tna_nom')
                ->limit($pag,$rowsPag)
                ->get();
                //echo $this->db->last_query();
                return $query->result();
            break;
           
            case 'all':
                $query=$this->db
                ->select("tna_cod,tna_nom")
                ->from("tipo_nivel_academico")
                ->count_all_results();
                //echo $this->db->last_query();
                return $query;
               break;
        }
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