<?php
function domain(){
   $arr= explode('/',  $_SERVER['REQUEST_URI']);
   $arr1 = array_pop($arr);
   if(end($arr1) == 'css'){
       $arr1 = array_pop($arr1);
   }
   $implode = implode('/', $arr1);
   return "http://".$_SERVER['HTTP_HOST'].$implode;
}
$domain = domain();
//echo $domain;
