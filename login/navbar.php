<?php   /////    navbar.php    ///// 
function loginLabel()
{  echo file_exists("login.mark")? "Logout":"Login";
}
function loginLink()
{  echo file_exists("login.mark") ? "logout.php":"login.php";
}
?>
<nav class="leftnavbar">
<?php if($page == "memberarea.php") {?>
<span class="self">Member Area</span>
<?php } else {?>
<a href="memberarea.php">Member Area</a><?php }?>

<?php if($page == "electronics.php") {?>
<span class="self">Products</span>
<?php } else {?>
<a href="shop.php">Electronics</a><?php }?>

<?php if($page == "myprofile.php") { ?>
<span class="self">MyProfile</span>
<?php } else {?>
<a href="myprofile.php">MyProfile</a><?php }?>

<?php if($page == "login.php") { ?>
<span class="self">Login</span>
<?php } else {?>
<a href="<?php loginLink();?>"><?php loginLabel();?></a><?php }?>
</nav>
