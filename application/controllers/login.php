<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template1');
    }
    
	public function index()
	{
		
		if( $this->input->post())
		{						
			$this->form_validation->run('login/index');
		}
		
		//Metadatos
		$this->layout->setTitle('Partenon - Iniciar Sesión');
		$this->layout->setKeywords('Partenon Keywords Prueba 1');
		$this->layout->setDescripcion('Plataforma virtual para comunidad educativa, comunicación docente - estudiantes - padres de familia y administrativos');
		//CSS - Auxiliar
		//$this->layout->css(array(base_url().'public/css/slider.css'));
		//JS - Auxiliar
		//$this->layout->js(array(base_url().'public/js/tms-0.3.js',base_url().'public/js/tms_presets.js',base_url().'public/js/slider_index.js'));
		//Vista
		$var = 0;
		$this->layout->view('index',compact('var'));
	}
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */