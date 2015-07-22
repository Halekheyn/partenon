    <section id="content">
        <div class="container_12">          
          <div class="grid_12 top-1">
          	<div class="box-shadow">
            	<div class="wrap block-2">                    
                    <div class="col-2">
                        <div class="form-login">
                        	<span class="titulo" >Inicia sesión para acceder a la plataforma</span>
							<?php 		
							
							echo $this->input->post('pass');
							$atributos = array('id' => 'form-login','name' => 'login');
							echo form_open(base_url().'login/index',$atributos);
                            
							$input_correo = array(
												'name'		=>	'correo',
												'value'		=>	set_value('correo','Introduce tu correo'),
												'maxlength'	=>	'50',
												'size'		=>	'30',
												'onBlur' 	=>  "if(this.value=='') this.value='Introduce tu correo'",
												'onFocus'	=>	"if(this.value =='Introduce tu correo') this.value=''"
												);											
							
							echo form_input($input_correo); echo form_error('correo');
														
							$input_pass = array(
												'name'		=>	'pass',
												'type'		=>	'password',
												'value'		=>	set_value('pass','Contraseña'),
												'maxlength'	=>	'15',
												'size'		=>	'20',
												'onBlur' 	=>  "if(this.value==''){this.value='Contraseña'; this.type = 'text';}",
												'onFocus'	=>	"if(this.value =='Contraseña'){this.value=''; this.type = 'password';}"	
												);											
							
							echo form_input($input_pass); echo form_error('pass');
							?>
                            <a onClick="document.login.submit()" class="login_button">Iniciar Sesión</a>
							<?php                               
                            echo form_close();     ?>                              
                             
                            </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section> 

    