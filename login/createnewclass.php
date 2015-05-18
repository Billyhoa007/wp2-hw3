<?php
// create classes to be used in form

class LineItem 
{
	// member variables 
	private  $name;
	private  $quantity;
	private  $price;
	private  $itemTotal;
	
	// mutator member methods
	
	public function setName($Oname)
	{
		$this -> name = $Oname;
	}
	public function setPrice($Oprice)
	{
		$this -> price = $Oprice;
	}
	public function setQuantity($OQuantity)
	{
		$this -> quantity = $OQuantity;
	}
	
	
	//  accessor member methods 
	
	public function getName()
	{
		return $this -> name;
	}
	
	public function getTotal()
	{
		$this->itemTotal= ($this->price * $this -> quantity);
		return $this ->itemTotal;
	}
	
	public function getPrice()
	{
		return $this -> price;	
	}
	
	public function getQuantity()
	{
		return $this -> quantity;
	}
}
?>

<?php
// create classes and use mutators to set values

	$computer = new LineItem;
	$computer -> setName("Computer");
	$computer -> setQuantity($_POST["computer"]);
	$computer -> setPrice("350.00");
 
	$tv = new LineItem;
	$tv -> setName("TV");
	$tv -> setQuantity($_POST["tv"]);
	$tv -> setPrice("500.00");

	$cellphone = new LineItem;
	$cellphone -> setName("Cellphone");
	$cellphone -> setQuantity($_POST["cellphone"]);
	$cellphone -> setPrice("750.00");

	$xbox360 = new LineItem;
	$xbox360 -> setName("Xbox360");
	$xbox360 -> setQuantity($_POST["xbox360"]);
	$xbox360 -> setPrice("150.00");

	$ps3 = new LineItem;
	$ps3 -> setName("PS3");
	$ps3 -> setQuantity($_POST["ps3"]);
	$ps3 -> setPrice("250");

	$xboxOne = new LineItem;
	$xboxOne -> setName("XboxOne");
	$xboxOne -> setQuantity($_POST["xboxOne"]);
	$xboxOne -> setPrice("335.00");

?>
