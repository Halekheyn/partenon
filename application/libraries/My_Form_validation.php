<?php
class My_Form_validation extends CI_Form_validation
{
    public function v_email($email)
    {
        if($email == 'Introduce tu correo')
        {
            return false;
        }else{
            return true;
        }		
    }

    public function v_pass($passw)
    {
        if($passw == 'Contraseña')
        {
            return false;
        }else{
            return true;
        }

    }

    public function v_select($valor)
    {
        if($valor == 0)
        {
            return true;
        }else{
            return false;
        } 
    }

    public function v_texto($cadena){ 
        if (preg_match("/^[a-zñáéíóúA-ZÑÁÉÍÓÚ ]*$/", $cadena))
        { 
            return true; 
        } else { 
            return false; 
        } 
    }
    
    public function urlInt($url)
    {
         if (preg_match('/^[0-9]*$/',$url))
        { 
            return true; 
        } else { 
            return false; 
        } 
    }
}