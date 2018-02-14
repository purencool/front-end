<?php
function domain(){
   $arr= explode('/',  $_SERVER['REQUEST_URI']);
   array_pop($arr);
   if(end($arr) == 'css'){
       array_pop($arr);
   }
   $implode = implode('/', $arr);
   return "http://".$_SERVER['HTTP_HOST'].$implode;
}
$domain = domain();
//echo $domain;

function lightVersion(){
    return (isset($_GET['q']) == 'y') ? true : false ;
 }
 $lightVersion = lightVersion();
