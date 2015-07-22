<?php

class usuarios_model extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
    }
   public function logueo($login,$pass)
   {
         $query=$this->db
        ->select("id,login,pass")
        ->from("usuarios")
        ->where(array("login"=>$login,"pass"=>$pass))
        ->count_all_results();
        //echo $this->db->last_query();
        return $query;
   }
}