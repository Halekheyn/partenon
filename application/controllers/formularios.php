<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formularios extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template1');
    }
    	
    /*----------TIPO NIVEL ACADEMICO---------------*/
    public function f_tna($cod=null)
    {				
        $listTna = $this->formularios_model->listTna();
        				
        //---Guardar
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
                                'val'   => '' 
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
            else
            {
                $msgFd = array(
                                'tipo'  => 'ref',
                                'msg'   => 'Diligencie los campos solicitados.',
                                'val'   => 'val_span' 
                                );
                $this->session->set_flashdata($msgFd);
                redirect(base_url().'formularios/f_tna');
            }					
        }
        //Metadatos
        $this->layout->setTitle('Tipo Nivel Academico');
        //$this->layout->setKeywords('Partenon Keywords Prueba 1');
        //$this->layout->setDescripcion('Plataforma virtual para comunidad educativa, comunicación docente - estudiantes - padres de familia y administrativos');
        //CSS - Auxiliar
        //$this->layout->css(array(base_url().'public/css/slider.css'));
        //JS - Auxiliar
        //$this->layout->js(array(base_url().'public/js/tms-0.3.js',base_url().'public/js/tms_presets.js',base_url().'public/js/slider_index.js'));
        //Vista
        $var = 0;
        $this->layout->view('f_tna',compact('var','listTna'));		
    }   
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */