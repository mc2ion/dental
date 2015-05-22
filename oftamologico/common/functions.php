<?php

$pages = array("inicio.php"=>"Inicio", "nosotros.php"=>"¿Quiénes somos?", "servicios.php"=>"Servicios", "directorio.php"=>"Directorio");

function menu($selected){
    global $pages;
    $out ='<ul class="nav navbar-nav navbar-right">';
    foreach ($pages as $k=>$v){
        $sel = ""; if ($k == $selected) $sel = "class='active'";
        $out .= "<li $sel>
                    <a href='$k'>$v</a>
                <li>\r\n";
        
    }
    return $out;
}


function head(){
    $out =
<<< EOT
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>iMedica</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'/>
    <link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/blue.css" id="style-switch" />
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.min.css" media="screen" />
    <!--[if IE 9]>
    	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
    <![endif]-->    
    <link rel="icon" type="image/png" href="images/fevicon.png"/>
    <link rel="stylesheet" type="text/css" href="css/slides.css" />
    <link rel="stylesheet" type="text/css" href="css/inline.min.css" />
EOT;
    return $out;
}

function prefooter(){
    $out =
<<<EOT
    <div class="container">
          <div class="row">
              <!--Foot widget-->
                <div class="col-xs-12 col-sm-6 col-md-9 foot-widget">
                    <a href="#"><div class="foot-logo col-xs-12 no-pad"></div></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
                    <address class="foot-address">
                      <div class="col-xs-12 no-pad"><i class="icon-globe address-icons"></i>iMedica Clinic <br />123 Fifth Avenue <br />New York, NY 10160</div>
                        <div class="col-xs-12 no-pad"><i class="icon-phone2 address-icons"></i>+123 455 755</div>
                        <div class="col-xs-12 no-pad"><i class="icon-file address-icons"></i>+123 555 755</div>
                        <div class="col-xs-12 no-pad"><i class="icon-mail address-icons"></i>contact@imedica.com</div>
                    </address>
                </div>
            </div>
         </div>       
EOT;
    return $out;
    
}

function footer(){
    $year = date('Y');
    $out =
<<<EOT
    <div class="container">
            <div class="row">
                <!--Foot widget-->
                <div class="col-xs-12 col-sm-12 col-md-12 foot-widget-bottom">
                <p class="col-xs-12 col-md-12 no-pad">Copyright {$year} iMedica | All Rights Reserved | Created by Spooktech</p>
                </div>
            </div>
        </div> 
EOT;
    return $out;
    
}

function jsInclude(){
    $out =
<<<EOT
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>  
    <script type="text/javascript" src="bootstrap-new/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexisel.min.js"></script>
    <script type="text/javascript" src="js/jquery.imedica.min.js"></script>
    <script type="text/javascript" src="js/custom-imedicajs.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
EOT;
    return $out;
    
}


?>