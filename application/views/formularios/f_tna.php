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
                        $atributos = array('id' => 'formTna','name' => 'formTna');
                        echo form_open(base_url().'formularios/f_tna',$atributos);
                        ?>  			                                                  
                        <table>   
                            <tr >
                                <td>
                                <?php echo form_label('Nombre:','inpNomTna')?>
                                </td>
                                <td align="left">
                                <?php 
                                $inpNomTna = array(					
                                                    'name'	=>  'inpNomTna',
                                                    'id'	=>  'inpNomTna',
                                                    'value'	=>  set_value('inpNomTna'),
                                                    'maxlength'	=>  '30',
                                                    'size'	=>  '20'
                                                    );
                                echo form_input($inpNomTna);
                                ?>                                     
                                <?php echo form_error('inpNomTna', '<span '.$valSpan.'>', '</span');?>  '                                                                   
                                </td>                                    
                            </tr>
                            <tr>                        
                                <td colspan="2">
                                <div class="form-icono">
                                <?php
                                $btnSaveTna = array(
                                                    'type'		=>	'image',
                                                    'class'		=>	'btnImg',
                                                    'name'		=>	'btnSaveTna',
                                                    'id'		=>	'btnSaveTna',
                                                    'value'		=>	'btnSaveTna',
                                                    'title'		=>	'Guardar',												
                                                    'src'		=>	base_url().'public/css/images/guardar.png'
                                                    );
                                    echo form_input($btnSaveTna);
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
                if($listTna > 0)
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
                    foreach($listTna as $datoTna)
                    {
                        //Aplicar el background intermedio
                        $mod = $cont/2 ;
                        if(is_int($mod)){ $img = "class='listar-tr-1'";$class = "listar-tr-1";}
                        else{$img ="class='listar-tr-2'";$class = "listar-tr-2";}
                        ?>	
                        <tr <?php echo $img ?> onMouseOver="this.className='listar-resaltar'" onMouseOut="this.className='<?php echo $class ?>'"	 > 
                            <td><?php echo $cont ?></td>
                            <td><?php echo $datoTna->tna_nom ?></td>														   
                            <td>
                                <div>										
                                    <a id="linkEditTna" href="<?php echo base_url() ?>formularios/f_tna/<?php echo $datoTna->tna_cod ?>">
                                    <img src="<?php echo base_url() ?>public/css/images/editar.png" class="action" id="imgEditTna" title="Editar">
                                    </a> 
                                </div>  
                            </td>                               
                            <td>
                                <div>	
                                    <a id="linkSuprTna" onclick="b_form_equi_tipo();return false">
                                    <img src="<?php echo base_url() ?>public/css/images/suprimir.png" class="action" id="imgSuprTna" title="Eliminar">
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
            <br><br>
            </div>                    
        </div>
    </div>
    <div class="clear"></div>
</section> 

    