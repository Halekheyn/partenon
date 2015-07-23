	<section id="content">
    	<div class="container_12">          
        	<div class="grid_12 top-1">
          		<div class="box-shadow">
            		<div class="wrap block-2">                    
                    	<div class="form-registros">
                        	<span class="titulo">Registro - Tipo Nivel Academico</span>
							
							<?php 							
							echo $this->input->post('pass');
							$atributos = array('id' => 'form-tna','name' => 'form_tna');
							echo form_open(base_url().'formularios/tipo_nivel_academico',$atributos);
                            						
							
							$input_in_tpa = array(
												'name'		=>	'in_tna',
												'id'		=>	'in_tna',
												'value'		=>	set_value('i_tna'),
												'maxlength'	=>	'30',
												'size'		=>	'20'
												);								
							?>                                                       
                           	<table align="center" >   
                                <tr >
                                	<td>
                                    <?php echo form_label('Nombre:','correo')?>
                                    </td>
                                    <td align="left">
                                    <?php echo form_input($input_in_tpa);?>                                    
                                    <span class="txt-validacion" id="in_tpa">Revisar<? echo form_error('$input_in_tpa');?></span>
                                    </td>                                    
                              	</tr>
                              	<tr>                        
									<td colspan="2" >
                                    <div class="form-icono" >
                                    <a id="g_equi_tipo" onclick="r_form_equi_tipo();return false">
                                    <img src="<?php echo base_url() ?>public/css/images/guardar.png" class="boton_img" id="b_g_equi_tipo" title="Guardar">
                                    </a></div>                                   
    
                                    <div class="form-icono" >
                                    <a id="b_equi_tipo" onclick="b_form_equi_tipo();return false">
                                    <img src="<?php echo base_url() ?>public/css/images/buscar.png" class="boton_img" id="b_b_equi_tipo" title="Buscar">
                                    </a></div>
                                    
                                    <div class="form-icono" >
                                    <a id="a_equi_tipo" onclick="a_form_equi_tipo();return false">
                                    <img src="<?php echo base_url() ?>public/css/images/actualizar.png" class="boton_img" id="b_a_equi_tipo" title="Actualizar">        
                                    </a></div>
                                    
                                    <div class="form-icono" >
                                    <a id="lis_equi_tipo" onclick="listar_form('equi_tipo','0');return false">
                                    <img src="<?php echo base_url() ?>public/css/images/listar.png" class="boton_img" id="b_lis_sala" title="Listar">
                                    </a></div>
                                    
                                    <div class="form-icono" >
                                    <a id="lim_equi_tipo" onclick="admin_div('equi_tipo');return false">
                                    <img src="<?php echo base_url() ?>public/css/images/limpiar.png" class="boton_img" id="b_lim_equi_tipo" title="Limpiar">
                                    </a></div>
                                    
                                    <div class="form-icono" >
                                    <a id="e_equi_tipo" onclick="e_form_equi_tipo();return false">
                                    <img src="<?php echo base_url() ?>public/css/images/eliminar.png" class="boton_img" id="b_e_equi_tipo" title="Eliminar">
                                    </a></div>
                                	</td>                                    
                                </tr>
                         	</table>		
							<?php                               
                            echo form_close();
							?>                                                 
                            </div>
                            <?php print_r($datos); ?>
                    	</div>
                	</div>
            	</div>
          	</div>
      		<div class="clear"></div>
  		</div>
	</section> 

    