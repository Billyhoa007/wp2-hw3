<h3>Electronics Order:</h3>

<div style="float : left width:100px;">
	<form method ="post" action="#">
		<p>Choose:
			<br><br>

			<input id="Computer" type="text" name="Computer"
			value="1" placeholder="1"/>
			<label for="Computer">Computer </label>
			<br><br>

			<input id="TV" type="text" name="TV"
			value="1" placeholder="1"/>
			<label for="TV">TV </label>
			<br><br>

			<input id="Cellphone" type="text" name="Cellphone"
			value="1" placeholder="1"/>
			<label for="Cellphone">Cellphone </label>
			<br><br>

			<input id="Xbox 360" type="text" name="Xbox 360"
			value="1" placeholder="1"/>
			<label for="Xbox 360">Xbox 360 </label>
			<br><br>

			<input id="PS3" type="text" name="PS3"
			value="1" placeholder="1"/>
			<label for="PS3">PS3 </label>
			<br><br>

			<input id="Xbox One" type="text" name="Xbox One"
			value="1" placeholder="1"/>
			<label for="Xbox One">Xbox One </label>
			<br><br>

			<input type="submit" name="submit" value=" Enter"/>
			<input type="submit" name="submit" value=" Done "
			action="final.php" />
		</p>

	</form>
</div>

<div style="float: right; top;">

	
	<?php require_once("seccsionsfns.php");
	session_start();	
 	
	//variables for values of products
	$_SESSION['computer']=350;
	$_SESSION['tv']=600;
	$_SESSION['cellphone']=800;
	$_SESSION['xbox_360']=150;
	$_SESSION['ps3']=150;
	$_SESSION['xbox_one']=399;
	
		

	echo $_SESSION['computer'];
	echo "<br><br>";

	//$tmp2 = echo $_SESSION['tv'];
	//echo "TV: $ $tmp2 ";
	//echo "<br><br>";

	//$tmp3 = echo $_SESSION['cellphone'];
	//echo "Cellphone: $ $tmp3 ";
	//echo"<br><br>";
 
	//$tmp4 = echo $_SESSION['xbox_360'];
	//echo "Xbox 360: $ $tmp4 ";
	//echo"<br><br>";

	//$tmp5 = echo $_SESSION['ps3'];
	//echo "PS3: $ $tmp5 ";
	//echo"<br><br>";
 
	//$tmp6 = echo $_SESSION['xbox_one'];
	//echo "Xbox One: $ $tmp6 ";
	//echo"<br><br>";

	//$total = ($tmpl+$tmp2+$tmp3+$tmp4+$tmp5+$tmp6);
	//echo "Total: $ $total ";
	session_end();
	?>
</div>
