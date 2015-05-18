<?php  session_start();
echo "<h2><center> Login to access Electronics</h2></center>";
$realm="Welcome To Electronics";
require_once("loginfns.php");
if ( !empty($_POST['submit']) && $_POST['submit']=="Login"
     && !empty($_SESSION['target']) )
{// process login
   if ( check_pass($_POST['uid'],$_POST['pass'],$PASSWORD_FILE) )
   {// login success
      $_SESSION['user']=$_POST['uid'];
      login_fn();
      //header("Location: " . $_SESSION['target']);
	  header("Location: electronics.php");
      exit;
   }
   else  
   {// login failed
      $title="Login Failed"; 
      $css=array("basic.css", "form.css");
      require("rfront.php");
      echo "<h2 class='error'>Incorrect Userid/Password </h2>";
      //      echo $_POST['uid']."  ".$_POST['pass']."  ".$PASSWORD_FILE;
      echo "<p class='error'>Please try again.</p>";
      require_once("loginform.php");
   } 
}
else // new login
{  require_once("sessionfns.php");
   https(); new_session(); logout_fn(); 
   if ( !empty($_REQUEST['target']) )
   {  $_SESSION['target']=$_REQUEST['target']; }
   else
   {  $_SESSION['target']='myprofile.php'; }
   $title="Login"; 
   $css=array("basic.css", "form.css");
   require_once("rfront.php");
   require_once("loginform.php");
}
require_once("rback.php"); 
?>
