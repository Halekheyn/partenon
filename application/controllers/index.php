<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template1');
    }
    
	public function index()
	{
				
		//Metadatos
		$this->layout->setTitle('Partenon - Comunidad Educativa Virtual');
		$this->layout->setKeywords('Partenon Keywords Prueba 1');
		$this->layout->setDescripcion('Plataforma virtual para comunidad educativa, comunicación docente - estudiantes - padres de familia y administrativos');
		//CSS - Auxiliar
		$this->layout->css(array(base_url().'public/css/slider.css'));
		//JS - Auxiliar
		$this->layout->js(array(base_url().'public/js/tms-0.3.js',base_url().'public/js/tms_presets.js',base_url().'public/js/slider_index.js'));
		//Vista
		$var = 1;
		$this->layout->view('index',compact('var'));
	}
	
	public function nosotros()
	{
		
		//Metadatos
		$this->layout->setTitle('Partenon - Comunidad Educativa Virtual');
		$this->layout->setKeywords('Partenon Keywords Prueba 2');
		$this->layout->setDescripcion('Una empresa dedicada al desarrollo de soluciones teconologias para mejorar la comunicación en la educación');
		//Vista
		$var = 2;
		$this->layout->view('nosotros',compact('var'));
	}
	
	public function contactenos()
	{
		
		//Metadatos
		$this->layout->setTitle('Partenon - Comunidad Educativa Virtual');
		$this->layout->setKeywords('Partenon Keywords Prueba 2');
		$this->layout->setDescripcion('Una empresa dedicada al desarrollo de soluciones teconologias para mejorar la comunicación en la educación');
		//Vista
		$var = 3;
		$this->layout->view('contactenos',compact('var'));
	}
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */