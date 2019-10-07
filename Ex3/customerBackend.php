<?php
//access the global array called $_POST to get the values from the text fields
echo "<title>Receipt</title>";
echo "<style type=\"text/css\">";
include 'style.css';
echo "</style>";


$name = $_POST["name"];
$password = $_POST["password"];
$brooms = $_POST["item1"];
$cauldrons = $_POST["item2"];
$spellbooks = $_POST["item3"];
$broomTotal = $brooms*50;
$cauldronTotal=$cauldrons*75;
$spellbookTotal=$spellbooks*300;
$shippingType = $_POST["ship"];

if($shippingType=="3 Day")
{
   $shippingCost=5;
}
else if($shippingType=="Overnight")
{
    $shippingCost=50;
}
else
{
   $shippingCost=0;
}

$total=$broomTotal+$cauldronTotal+$spellbookTotal+$shippingCost;

echo "<strong id=\"backendtext\">Welcome </strong>$name";
echo "<strong>Password:</strong> " . $password . "<br>";

echo "<table>";

	echo "<tr>";
		echo "<td colspan=\"2\" style=\"text-align: center\">Customer: $name</td>";
		echo "<td colspan=\"2\" style=\"text-align: center\">Password: $password</th>";
	echo "</tr>";
	
	echo "<tr>";
		echo "<td>	</td>";
		echo "<th style=\"text-align: center\">Quantity</th>";
		echo "<th style=\"text-align: center\">Cost per Item</th>";
		echo "<th style=\"text-align: center\">Subtotal</th>";
	echo "</tr>";

echo "<tr>";
	echo "<th style=\"text-align: center\">Brooms</th>";
	echo "<td style=\"text-align: center\">$brooms</td>";
	echo "<td style=\"text-align: center\">$50.00</td>";
	echo "<td style=\"text-align: center\">$$broomTotal.00</td>";
echo "</tr>";

echo "<tr>";
	echo "<th style=\"text-align: center\">Cauldrons</th>";
	echo "<td style=\"text-align: center\">$cauldrons</td>";
	echo "<td style=\"text-align: center\">$75.00</td>";
	echo "<td style=\"text-align: center\">$$cauldronTotal.00</td>";	
echo "</tr>";

echo "<tr>";
	echo "<th style=\"text-align: center\">Spellbooks</th>";
	echo "<td style=\"text-align: center\">$spellbooks</td>";
	echo "<td style=\"text-align: center\">$300.00</td>";
	echo "<td style=\"text-align: center\">$$spellbookTotal.00</td>";
echo "</tr>";

echo "<tr>";
	echo "<th style=\"text-align: center\">Shipping</th>";
	echo "<td colspan=\"2\" style=\"text-align: center\">$shippingType</td>";
	echo "<td style=\"text-align: center\">$$shippingCost.00</td>";
echo "</tr>";


echo "<tr>";
	echo "<th colspan=\"3\" style=\"text-align: center\">Total Cost</th>";
	echo "<td style=\"text-align: center\">$$total.00</td>";
echo "</tr>";


echo "</table>";
?>