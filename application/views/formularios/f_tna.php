<?php
if($this->session->flashdata('msg') != '')
{
   $tipo = $this->session->flashdata('tipo');
   $msg = $this->session->flashdata('msg');
   $valSpan = 'class="'.$this->session->flashdata('val').'"';

   $msgBox = "<div id='msg' >
                <div class='$tipo'>$msg</div>                                                   
             </div> ";                                                     
 }
else
{
    $msgBox = '';
    $valSpan = '';
}
?>  
<section id="content">
    <div class="container_12">          
        <div class="grid_12 top-1">
            <div class="box-shadow">
                <div class="wrap block-2">                    
                    <div class="form-registros">
                        <span class="titulo">Registro - Tipo Nivel Academico</span>
                        <?php
                        /*echo set_value('in_tna',$id);
                        //echo set_value('i_nom_tna');
                        if($id_editar != null)
                        {
                                $nombre = $id_editar->tna_nom;								
                        }
                        else
                        {
                                $nombre = "";	
                        }*/									
                        $atributos = array('id' => 'form_tna','name' => 'form_tna');
                        echo form_open(base_url().'formularios/f_tna',$atributos);
                        ?>  			                                                  
                        <table>   
                            <tr >
                                <td>
                                <?php echo form_label('Nombre:','i_nom_tna')?>
                                </td>
                                <td align="left">
                                <?php 
                                $i_nom_tna = array(					
                                                    'name'		=>	'i_nom_tna',
                                                    'id'		=>	'i_nom_tna',
                                                    'value'		=>	set_value('i_nom_tna'),
                                                    'maxlength'	=>	'30',
                                                    'size'		=>	'20'
                                                    );
                                echo form_input($i_nom_tna);
                                ?>                                     
                                <?php echo form_error('i_nom_tna', '<span '.$valSpan.'>', '</span');?>                                                                     
                                </td>                                    
                            </tr>
                            <tr>                        
                                <td colspan="2">
                                <div class="form-icono" >
                                <?php
                                $bguardar_tna = array(
                                                    'type'		=>	'image',
                                                    'class'		=>	'boton_img',
                                                    'name'		=>	'bguardar_tna',
                                                    'id'		=>	'bguardar_tna',
                                                    'value'		=>	'bguardar_tna',
                                                    'title'		=>	'Guardar',												
                                                    'src'		=>	base_url().'public/css/images/guardar.png'
                                                    );
                                    echo form_input($bguardar_tna);
                                ?>
                                </div>
                                </td>                                                                     
                            </tr>
                        </table>		
                        <?php 
                        echo form_close();
                        ?>                                                 
                    </div>
                </div>
                <?php
                echo $msgBox;
                if($listar_datos > 0)
                { ?>
                <div class="listar-registros"> 
                    <table>   
                    <tr>
                        <th>No.</th>
                        <th>Nombre</th>   
                        <th colspan="2">Acciones</th>                                    
                    </tr>
                    <?php
                    $cont = 1;	
                    foreach($listar_datos as $dato)
                    {
                        //Aplicar el background intermedio
                        $mod = $cont/2 ;
                        if(is_int($mod)){ $img = "class='listar-tr-1'";$class = "listar-tr-1";}
                        else{$img ="class='listar-tr-2'";$class = "listar-tr-2";}
                        ?>	
                        <tr <?php echo $img ?> onMouseOver="this.className='listar-resaltar'" onMouseOut="this.className='<?php echo $class ?>'"	 > 
                            <td><?php echo $cont ?></td>
                            <td><?php echo $dato->tna_nom ?></td>														   
                            <td>
                                <div>										
                                    <a id="eliminar" href="<?php echo base_url() ?>formularios/f_tna/<?php echo $dato->tna_cod ?>">
                                    <img src="<?php echo base_url() ?>public/css/images/editar.png" class="action" id="b_g_equi_tipo" title="Editar">
                                    </a> 
                                </div>  
                            </td>                               
                            <td>
                                <div>	
                                    <a id="b_equi_tipo" onclick="b_form_equi_tipo();return false">
                                    <img src="<?php echo base_url() ?>public/css/images/suprimir.png" class="action" id="b_b_equi_tipo" title="Eliminar">
                                    </a>
                                </div>
                            </td>																		                                 
                        </tr>
                    <?php  $cont++; } ?>
                    </table>														                    
                </div>
                <?php
                } 
                else{ 
                ?><br />
                <div id="msg">
                    <div class="info">
                            No hay registros para mostrar
                    </div>                                                   
                </div>
                <?php }	?>	
            </div>                    
        </div>
    </div>
    <div class="clear"></div>
</section> 

    