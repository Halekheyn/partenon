<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php echo $this->layout->getTitle();?></title>
    <meta name="description" content="<?php echo $this->layout->getDescripcion();?>">
    <meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>" />

    <meta charset="utf-8">

    <!-- Principal-->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>public/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>public/css/style.css">    
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>public/css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>public/css/ie.css">
      
    <!-- Auxiliares CSS-->
    <?php echo $this->layout->css; ?> 
    <!-- Fin Auxiliares CSS -->
    
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif&subset=latin' rel='stylesheet' type='text/css'>

	<script src="<?php echo base_url()?>public/js/jquery-1.7.min.js"></script>
    <script src="<?php echo base_url()?>public/js/jquery.easing.1.3.js"></script>

    <!-- Auxiliares JS-->
	<?php echo $this->layout->js; ?> 
	<!-- Fin Auxiliares JS-->
    
    
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
    <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
    
</head>
<body>
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
<div class="main">
	
    <div class="bg-img"></div>
<!--==============================header=================================-->
    <header>
        <h1><a href="index.html">Fitness<strong>Club</strong></a></h1>
        <nav>
        	<div class="social-icons">
            	<a href="#" class="icon-2"></a>
            	<a href="#" class="icon-1"></a>
            </div>
            <ul class="menu">            	
                <li <?php if($var==1) echo  "class='current'" ?>><a <?php if($var!=1) echo  "href='".base_url()."index'" ?>>Inicio</a></li>
                <li <?php if($var==2) echo  "class='current'" ?>><a <?php if($var!=2) echo  "href='".base_url()."nosotros'" ?>>Nosotros</a></li>
                <li <?php if($var==3) echo  "class='current'" ?>><a <?php if($var!=3) echo  "href='".base_url()."contactenos'" ?>>Contactenos</a></li>
            </ul>
        </nav>
    </header>

<!--==============================content================================-->

	<?php echo $content_for_layout; ?>

<!--==============================footer=================================-->
    <footer>
        <p>© 2012 Fitness Club</p>
        <p><a rel="nofollow" href="http://www.templatemonster.com/" class="link" target="_blank">Website Template</a> by TemplateMonster.com</p>
		<p>Buena colecci&oacute;n de plantillas web gratis <a href="http://www.mejoresplantillasgratis.es" target="_blank">aqu&iacute;</a>.</p>
    </footer>	
</div>
</body>
</html>