<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Formularios extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template1');
    }
    	
    /*----------TIPO NIVEL ACADEMICO---------------*/
    public function f_tna()
    {				
        /**
         * Creamos el código de la paginación
         */
        if($this->uri->segment(4)){
            $pag = $this->uri->segment(4);
        }else{
            $pag = 0;
        }
        
        $rowsPag = 2;
        $listTna = $this->formularios_model->listTna($rowsPag,$pag,'limit');
        $listAllTna = $this->formularios_model->listTna($rowsPag,$pag,'all');
                
        $config['base_url'] = base_url().'formularios/f_tna/pag/';
        $config['total_rows'] = $listAllTna;
        $config['per_page'] = $rowsPag;
        $config['uri_segment'] = '4';
        $config['num_links'] = '2';
        //Marca de Cierre
        $config['full_tag_open'] = '<div class="paginacion">';
        $config['full_tag_close'] = '</div>';
        //Enlace Primero
        $config['first_link'] = 'Primero'; 
        //Enlace Ultimo
        $config['last_link'] = 'Ultimo';
        //Enlace Actual
        $config['cur_tag_open'] = '<span><strong>';
        $config['cur_tag_close'] = '</span></strong>';
        $config['next_link'] = '&gt;';
        $config['prev_link'] = '&lt;';        
        $this->pagination->initialize($config);
        				
        //---Guardar---
        if($this->input->post('btnSaveTna'))
        {						
            if($this->form_validation->run('formularios/f_tna'))
            {
                $nomTna = ucwords($this->input->post('inpNomTna',true));
                $dataTna=array(
                            'tna_cod' => '',
                            'tna_nom' => $nomTna
                           );
                $saveTna = $this->formularios_model->mSaveTna($dataTna,$nomTna);
                if($saveTna)
                {
                    $msgFd = array(
                                'tipo'  => 'error',
                                'msg'   => 'El nombre '.$nomTna.' ya existe.',
                                'val'   => '',
                                'nomTna'=> $nomTna
                                );
                    $this->session->set_flashdata($msgFd); 
                    redirect(base_url().'formularios/f_tna');
                }
                else 
                {
                    $msgFd = array(
                                'tipo'  => 'ok',
                                'msg'   => 'Registro Exitoso.',
                                'val'   => '' 
                                );
                    $this->session->set_flashdata($msgFd);
                    redirect(base_url().'formularios/f_tna');             
                }
            }            				
        }
        //---Buscar---
        if($this->input->post('btnSearchTna'))
        {						
            if($this->form_validation->run('formularios/f_tna'))
            {
                $nomTna = ucwords($this->input->post('inpNomTna',true));
                $searchTna = $this->formularios_model->mSearchTna($nomTna);
                if($searchTna)
                {
                    $listTna = $searchTna;
                }
                else 
                {
                    $msgFd = array(
                                'tipo'  => 'ref',
                                'msg'   => 'El nombre '.$nomTna.' no existe.',
                                'val'   => '',
                                'nomTna'=> $nomTna
                                );
                    $this->session->set_flashdata($msgFd); 
                    redirect(base_url().'formularios/f_tna');
                }
            }            				
        }
        //Metadatos
        $this->layout->setTitle('Tipo Nivel Academico');
        //$this->layout->setKeywords('Partenon Keywords Prueba 1');
        //$this->layout->setDescripcion('Plataforma virtual para comunidad educativa, comunicación docente - estudiantes - padres de familia y administrativos');
        //Vista        
        $var = 0;
        $this->layout->view('f_tna',compact('var','listTna','pag'));		
    }   
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */