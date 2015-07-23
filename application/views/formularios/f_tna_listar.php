	<section id="content">
    	<div class="container_12">          
        	<div class="grid_12 top-1">
          		<div class="box-shadow">
            		<div class="wrap block-2">                    
                    	<div class="listar-registros">
                        	<span class="titulo">Lista - Tipo Nivel Academico</span>                            				                                                     
                           	<table >   
                                <tr >
                                	<th>No.</th>
                                    <th>Nombre</th>   
                                    <th colspan="2">Acciones</th>                                    
                              	</tr>
                                <?php
								$cont = 0;
								foreach($datos as $dato)
								{
									//Aplicar el background intermedio
									$mod = $cont/2 ;
									if(is_int($mod)){ $img = "class='listar-tr-1'";$class = "listar-tr-1";}
									else{$img ="class='listar-tr-2'";$class = "listar-tr-2";}
									
								?>	
									<tr <?php echo $img ?> onMouseOver="this.className='listar-resaltar'" onMouseOut="this.className='<?php echo $class ?>'"	 > 
										<td><?php echo $dato->tna_cod ?></td>
										<td><?php echo $dato->tna_nom ?></td>														   
										<td>
                                        <div>										
										<a id="eliminar" onclick="r_form_equi_tipo();return false">
										<img src="<?php echo base_url() ?>public/css/images/editar.png" class="action" id="b_g_equi_tipo" title="Editar">
										</a> 
                                        </div>  
                                       	</td>                               
										<td>
										<div>	
										<a id="b_equi_tipo" onclick="b_form_equi_tipo();return false">
										<img src="<?php echo base_url() ?>public/css/images/suprimir.png" class="action" id="b_b_equi_tipo" title="Eliminar">
										</a></div>
                                        </td>																		                                 
									</tr>
                             	<?php  $cont++; } ?>
                         	</table>		
                                                
                            </div>
                            
                    	</div>
                	</div>
            	</div>
          	</div>
      		<div class="clear"></div>
  		</div>
	</section> 

    