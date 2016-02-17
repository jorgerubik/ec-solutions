<?php
$idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
 
if($idioma=='en'){
    header("Location: index-es.html");
}else{
    header("Location: index-es.html");
}

?>