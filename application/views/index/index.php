    <section id="content">
        <div class="container_12">
          <div class="grid_12">
            <div class="slider">
              <ul class="items">
                 <li><img src="<?php echo base_url() ?>public/images/slider-1.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Special<span>Program</span></p>
                        <p class="font-2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        <a href="#">Read More</a>
                    </div>
                </li>
                <li><img src="<?php echo base_url() ?>public/images/slider-2.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Get Free<span>Training</span></p>
                        <p class="font-2">Liquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                        <a href="#">Read More</a>
                    </div>
                </li>
                <li><img src="<?php echo base_url() ?>public/images/slider-3.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Join<span>our team</span></p>
                        <p class="font-2">Liquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                        <a href="#">Read More</a>
                    </div>
                </li>
              </ul>
              <div class="pagination">
                  <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
              </div>  
            </div>
          </div>	
          <div class="grid_12 top-1">
          	<div class="block-1 box-shadow">
            	<p class="font-3">Fitness Club is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank" class="color-1">free website templates</a> created by TemplateMonster. This website template is optimized for 1280X1024 screen resolution. This <a href="http://blog.templatemonster.com/2012/04/02/free-website-template-jquery-slider-fitness-club/" class="color-1">Fitness Club Template</a> goes with 2 packages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplateMonster.com.</p>
            </div>
          </div>
          <div class="grid_12 top-1">
          	<div class="box-shadow">
            	<div class="wrap block-2">
                    <div class="col-1">
                    	<h2 class="p3"><span class="color-1">Latest</span> events</h2>
                        <div class="wrap box-1">
                            <img src="<?php echo base_url() ?>public/images/page1-img1.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>Ut wisi enim ad minim veniamis nostrud</strong> </p>
                                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
                            </div>
                        </div>
                        <div class="wrap box-1 top-2">
                            <img src="<?php echo base_url() ?>public/images/page1-img2.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p><strong>Duis autem vel eum iriure dolor</strong></p>
                                <p>Hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilis lorem ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h2 class="p3"><span class="color-1">Services</span> list</h2>
                        <ul class="list-1">
                        	<li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Consetetur sadipscing elitr sed</a></li>
                            <li><a href="#">Diam nonumy eirmod tempor</a></li>
                            <li><a href="#">Invidunt ut labore dolore</a></li>
                            <li><a href="#">Magna aliquyam erat sed</a></li>
                        </ul>
                        <div class="form-login">
                        	<span class="titulo" >Inicia sesión para acceder a la plataforma</span> 
                            
							<?php 							
							$atributos = array('id' => 'form-login','name' => 'login');
							echo form_open(base_url().'login/index',$atributos);   
							
							$input_correo = array(
												'name'		=>	'correo',
												'value'		=>	'Introduce tu correo',
												'maxlength'	=>	'50',
												'size'		=>	'30',
												'onBlur' 	=>  "if(this.value=='') this.value='Introduce tu correo'",
												'onFocus'	=>	"if(this.value =='Introduce tu correo') this.value=''"
												);											
							
							echo form_input($input_correo);
														
							$input_pass = array(
												'name'		=>	'pass',
												'type'		=>	'password',
												'value'		=>	'Contraseña',
												'maxlength'	=>	'15',
												'size'		=>	'20',
												'onBlur' 	=>  "if(this.value==''){this.value='Contraseña'; this.type = 'text';}",
												'onFocus'	=>	"if(this.value =='Contraseña'){this.value=''; this.type = 'password';}"	
												);											
							
							echo form_input($input_pass);
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

    