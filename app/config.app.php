<?php
    define('TITULO_PAGINA', "Samsung S22");
    define('SERVIDOR', "http://localhost/sam/");
    define('DEP_CSS', SERVIDOR . "public/css/");
    define('DEP_SCRIPT', SERVIDOR . "public/js/");
    define('DEP_IMG', SERVIDOR . "public/img/");
    define('CONTROLLER', SERVIDOR . "controller/");
    define('LIB_JC', SERVIDOR . "app/lib/JC/");
    
    define('AUDIO', SERVIDOR . "public/files/audio/");
    define('DOC', SERVIDOR . "public/files/doc/");
    define('PDF', SERVIDOR . "public/files/pdf/");
    define('VIDEO', SERVIDOR . "public/files/video/");
    define('EXCEL', SERVIDOR . "public/files/xlsx/");
    
    define("direccion", array(
        'home' => 'view/home.view',
        'accesorios' => 'view/accesorios.view',
        'facilidades' => 'view/facilidades.view',
        'especificaciones' => 'view/especificaciones.view',
        'S22' => 'view/s22.view',
        'S22Plus' => 'view/s22Plus.view',
        'S22Ultra' => 'view/s22Ultra.view',
        'error' => 'view/error/error404.view',
    ));
?>
