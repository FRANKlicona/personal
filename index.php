<?php 
$view = (!isset($_REQUEST['v']) ? 'home.': $_REQUEST['v'] );

require_once("header.html");
if ($view != null and $view != '' ){
 require_once($view."php");
}else{
    
require_once "home.html";

}
require_once("footer.html");

?>