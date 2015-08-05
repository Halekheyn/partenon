



<?php
if($this->session->flashdata('msg') != '')
{
   $tipo = $this->session->flashdata('tipo');
   $msg = $this->session->flashdata('msg');
   $fdNomTna = $this->session->flashdata('nomTna');  
   $msgBox = "<div id='msg' >
                <div class='$tipo'>$msg</div>                                                   
             </div> ";  
   if(!isset($listTna))
   {
       $listTna = 0;
   }
 }
else
{
    $msgBox = '';
    $fdNomTna = '';
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
                        $atributos = array('id' => 'formTna','name' => 'formTna', 'onKeypress'=>'if(event.keyCode == 13) event.returnValue = false');
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
                                                    'value'	=>  $fdNomTna,
                                                    'maxlength'	=>  '30',
                                                    'size'	=>  '20'
                                                    );
                                echo form_input($inpNomTna);
                                ?>                                     
                                <?php if($msgBox == ''){                            
                                    echo form_error('inpNomTna', '<span class="val_span">', '</span');
                                }?>                                                                   
                                </td>                                    
                            </tr>
                            <tr>                        
                                <td colspan="2">
                                <?php
                                $btnSaveTna = array(
                                                    'type'  =>	'submit',
                                                    'class' =>	'login_button',
                                                    'name'  =>	'btnSaveTna',
                                                    'id'    =>	'btnSaveTna',
                                                    'value' =>	'Guardar',
                                                    'title' =>	'Guardar'
                                                    );
                                echo form_input($btnSaveTna);                   
                                ?>
                                </td>                                                                     
                            </tr>
                        </table>		
                        <?php 
                        echo form_close();
                        ?>                                                 
                    </div>
                </div>
                <?php
                echo $msgBox.'<br><br>';                
                if(count($listTna) > 0)
                { ?>
                <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th id="listar-reg-th">No.</th>
                        <th>Nombre</th>
                        <th>Editar</th> 
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($listTna as $datoTna)
                    {
                    ?>          
                    <tr> 
                        <td><?php echo $pag+1 ?></td>
                        <td><?php echo $datoTna->tna_nom ?></td>       
<!--                        <td>Tiger Nixon</td>
                        <td>System Architect</td>-->
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
                    <?php  $pag++; } ?>
<!--                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>63</td>
                        <td>2011/07/25</td>                        
                    </tr>            -->
                </tbody>
            </table>            
            <?php /* ?>
                <div class="listar-registros"> 
                    <table id="tabla_datatable">  
                        <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre</th>   
                        <th colspan="2">Acciones</th>                                    
                    </tr>
                        </thead>
                        <tbody>
                    <?php   /*               
                    foreach($listTna as $datoTna)
                    {
                        //Aplicar el background intermedio
                        $mod = $pag/2 ;
                        if(is_int($mod)){ $img = "class='listar-tr-1'";$class = "listar-tr-1";}
                        else{$img ="class='listar-tr-2'";$class = "listar-tr-2";}
                        ?>	
                        
                    
                        </tbody>
                    </table> 
                    */
                    ?>
                </div>      
                <br />
                <script>
                    $(document).ready(function(){
                        $('#example').DataTable();
                    });
                </script>
<!--                <div id="msg">
                    <div class="info">
                        No hay registros para mostrar
                    </div>                                                   
                </div>
                <?php }	?>	-->
            <br><br>
            </div>                    
        </div>
    </div>
    <div class="clear"></div>
</section> 

    