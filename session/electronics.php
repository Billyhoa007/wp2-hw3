<?php require_once("sessionfns.php");

session_start();
if ( empty($_SESSION['user']) )
{  header("Location: login.php?target=" . $_SERVER['PHP_SELF']);
   exit; 
}

//global $gransTotal;
global $tmpl;
global $tmp2;
global $tmp3;
global $tmp4;
global $tmp5;
global $tmp6;


global $ptmp1;
global $ptmp2;
global $ptmp3;
global $ptmp4;
global $ptmp5;
global $ptmp6;
global $ptotal;

$css=array("basic.css", "form.css");
$title = "Electronics";
$css=array("../login/basic.css", "../login/form.css");
require("../login/rfront.php");
require("orderform.php");
	
function processOrder()
{ /* $cr =  $_POST["crust"];
if ( $cr ) {  $_SESSION['crust'] = $cr; }
$top = $_SESSION['toppings'];
$it = $_POST["top"];
if ( $it && ! strstr($top,$it) ) 
{ if ( $top ) { $_SESSION['toppings'] = "$top, $it";  }
else { $_SESSION['toppings'] = $it;  }
*/
}


if( empty($_POST['submit']) )
{ session_id(md5(time() . rand() . $_SERVER['REMOTE_ADDR']));
session_start();  // before any output 
//$_SESSION['crust']="";
//$_SESSION['toppings']="";
//include("head.inc");
include_once("../login/navbar.php");
include_once("orderform.php");
}
elseif ($_POST['submit'] == " Enter " )  // continuing
{ session_start();  // before any output 
processOrder();
//include("head.inc");
include_once("../login/navbar.php");
include_once("orderform.php");
}
elseif( $_POST['submit'] == " Done " )
{ session_start(); session_end();
//include("head.inc");
include_once("../login/navbar.php");
echo '<p>Your order is complete.
Thanks for your business.</p>';
echo '<p><a href="">Another Order</a></p>';
} ?>


</body></html>
