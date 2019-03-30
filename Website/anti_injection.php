<?php


    function anti_injection($input){
    $clean=strip_tags(addslashes(trim($input)));
    $clean=str_replace("'","\'",$clean);
    $clean=str_replace('"','\"',$clean);
    $clean=str_replace(';','\;',$clean);
    $clean=str_replace('--','\--',$clean);
    $clean=str_replace('+','\+',$clean);
    $clean=str_replace('(','\(',$clean);
    $clean=str_replace(')','\)',$clean);
    $clean=str_replace('=','\=',$clean);
    $clean=str_replace('>','\>',$clean);
    $clean=str_replace('<','\<',$clean);
    
   
        
    
    return $clean;
}
?>