<?php
    $system = [];
    $system['environment'] = "local";
    
    switch($system['environment']){
        case 'local':
            $system['debug']=true;
            ini_set('display_error','On');
            error_reporting(E_ALL);
            break;
        default;
            $system['debug']=false;
            break;
    }
    
    //Get Function for site
    
    require_once("+basic_functions.php");