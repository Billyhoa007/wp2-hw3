<?php require("rfront.php")  ?>
<h3>Electronics Order</h3>

<h4> To finalize order click the finalize button at the bottom </h4>

<div style="float: left; width:100px;">
	<form method="POST" action="" >
	<p>Choose:
	<br><br>


	<input id="computer" type="text" name="computer" value = "1"/>
	<label for="computer">Computer</label>
	<br><br>
	
	<input id="tv" type="text" name="tv" value = "1" />
	<label for="tv">TV</label>
	<br><br>
	
	<input id="cellphone" type="text" name="cellphone" value = "1" />
	<label for="cellphone">Cellphone</label>
	<br><br>
	
	<input id="xbox360" type="text" name="xbox360" value = "1" />
	<label for="xbox360">Xbox360</label>
	<br><br>
	
	<input id="ps3" type="text" name="ps3" value = "1" />
	<label for="ps3">PS3</label>
	<br><br>

	<input id="xboxOne" type="text" name="xboxOne" value = "1" />
	<label for="xboxOne">XboxOne</label>
	<br><br>

	<input type="submit" name="submit" value=" Revise " /> 
	<input type="submit" name="submit" value=" Finalize " action="" /></p>
	
	</form>
</div>

<?php
//  store form data in session for retrieval 
	if ($_POST["computer"] != 1)
	{
		$_SESSION["computer"] = $_POST["computer"];
	}
	if ($_POST["tv"] != 1)
	{
		$_SESSION["tv"] = $_POST["tv"];
	}
	if ($_POST["cellphone"] != 1)
	{
		$_SESSION["cellphone"] = $_POST["cellphone"];
	}
	if ($_POST["xbox360"] != 1)
	{
		$_SESSION["xbox360"]= $_POST["xbox360"];
	}
	if ($_POST["ps3"] != 1)
	{
		$_SESSION["ps3"]= $_POST["ps3"];
	}
	if ($_POST["xboxOne"] != 1)
	{
		$_SESSION["xboxOne"] = $_POST["xboxOne"];
	}
?>

<?php
if ($_SESSION["computer"])
{
	$computer = new LineItem;
	$computer -> setName("Computer");
	$computer -> setQuantity($_SESSION["computer"]);
	$computer -> setPrice("350.00");
}

if ($_SESSION["tv"])
{ 
	$tv = new LineItem;
	$tv -> setName("Tv");
	$tv -> setQuantity($_SESSION["tv"]);
	$tv -> setPrice("500.00");
}
if ($_SESSION["cellphone"])
{
	$cellphone = new LineItem;
	$cellphone -> setName("Cellphone");
	$cellphone -> setQuantity($_SESSION["cellphone"]);
	$cellphone -> setPrice("750.00");
}

if ($_SESSION["xbox360"])
{
	$xbox360 = new LineItem;
	$xbox360 -> setName("Xbox360");
	$xbox360 -> setQuantity($_SESSION["xbox360"]);
	$xbox360 -> setPrice("150.00");
}

if ($_SESSION["ps3"])
{
	$ps3 = new LineItem;
	$ps3 -> setName("PS3");
	$ps3 -> setQuantity($_SESSION["ps3"]);
	$p33 -> setPrice("250.00");
}

if ($_SESSION["xboxOne"])
{
	$xboxOne = new LineItem;
	$xboxOne -> setName("XboxOne");
	$corvette -> setQuantity($_SESSION["xboxOne"]);
	$corvette -> setPrice("335.00");
}

?>

<div style="float: right; top:0;">
<table style="width:100%" border = "1px solid black">
  <tr>
    <td>Item</td>
    <td>Quantity</td> 
    <td>Price</td>
	<td>Total Price</td>
  </tr>
  <tr>
    <td><?php print $computer ->getName(); ?></td>
    <td><?php print $computer ->getQuantity(); ?></td> 
    <td><?php print $computer ->getPrice(); ?></td>
	<td><?php print $computer ->getTotal(); ?></td>
	
  </tr>
  <tr>
    <td><?php print $tv ->getName(); ?></td>
    <td><?php print $tv ->getQuantity(); ?></td> 
	<td><?php print $tv ->getPrice(); ?></td>
    <td><?php print $tv ->getTotal(); ?></td>
  </tr>
  <tr>
    <td><?php print $cellphone ->getName(); ?></td>
    <td><?php print $cellphone ->getQuantity(); ?></td> 
	<td><?php print $cellphone ->getPrice(); ?></td>
    <td><?php print $cellphone ->getTotal(); ?></td>
  </tr>
  <tr>
    <td><?php print $xbox360 ->getName(); ?></td>
    <td><?php print $xbox360 ->getQuantity(); ?></td> 
	<td><?php print $xbox360 ->getPrice(); ?></td>
    <td><?php print $xbox360 ->getTotal(); ?></td>
  </tr>
  <tr>
    <td><?php print $ps3 ->getName(); ?></td>
    <td><?php print $ps3 ->getQuantity(); ?></td> 
	<td><?php print $ps3 ->getPrice(); ?></td>
    <td><?php print $ps3 ->getTotal(); ?></td>
  </tr>
  <tr>
    <td><?php print $xboxOne ->getName(); ?></td>
    <td><?php print $xboxOne ->getQuantity(); ?></td> 
	<td><?php print $xboxOne ->getPrice(); ?></td>
    <td><?php print $xboxOne ->getTotal(); ?></td>
  </tr>
</table>

<?php
$total = ($compurer -> getTotal() + $tv -> getTotal() + $cellphone -> getTotal() + $xbox360 -> getTotal()+ $ps3 -> getTotal() + $xboxOne -> getTotal());
echo "Grand Total: $ $total ";
$grandTotal = $total;
// have to test for session id change inbetween
// sets new value if there is a change from default value of 1

?>

<?php
//  store form data in session for retrieval 
	if ($_POST["computer"] != 1)
	{
		$_SESSION["computer"] = $_POST["computer"];
	}
	if ($_POST["tv"] != 1)
	{
		$_SESSION["tv"] = $_POST["tv"];
	}
	if ($_POST["cellphone"] != 1)
	{
		$_SESSION["cellphone"] = $_POST["cellphone"];
	}
	if ($_POST["ps3"] != 1)
	{
		$_SESSION["ps3"]= $_POST["ps3"];
	}
	if ($_POST["xboxOne"] != 1)
	{
		$_SESSION["xboxOne"] = $_POST["xboxOne"];
	}
		
?>

</div>
