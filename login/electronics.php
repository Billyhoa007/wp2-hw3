<?php
session_start();
if(empty ($_SESSION['user']) )
{
	header("Location: Login.php?target=" .
	$_SERVER['PHP_SELF']);
	exit;
}

include("sessionfns.php");
include("rfront.php");
function processOrder()
{ 
// this implementation breaks the code
}

if( (empty($_POST['submit']))) 
{ session_id(md5(time() . rand() . $_SERVER['REMOTE_ADDR']));
  session_start();  // before any output 
  include("head.inc");
  require("createnewclass.php");  // creates class type
  require("shopform.php");
}

elseif ($_POST['submit'] == " Enter " )  // continuing
{ session_start();  // before any output 
  //processOrder();
  include("head.inc");
  require("createclasses.php");   // creates line item classes used in processOrder for data encapsulation
  require("shopform.php");
}

elseif( $_POST['submit'] == " Done " )
{ session_start(); //session_end();
  include("head.inc");
  require("createclasses.php");
  require("checkout.php");
  
} 

elseif( $_POST['submit'] == " Revise " )
{ session_start(); //session_end();
  include("head.inc");
  require("createclasses.php");
  require("checkout.php");
  
}
 
elseif( $_POST['submit'] == " Finalize " )
{  //session_end();
  include("head.inc");
  //require("createclasses.php");
  //require("checkout.php");
  include("rfront.php");  
echo "The techs we have on staf are getting your items ready to be delievered";
  
} 

include("rback.php");
// create else if for logout
?>

