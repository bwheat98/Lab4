
<link rel="stylesheet" type="text/css" href="style.css">
<?php
$user = $_POST["user"];
$pwd =  $_POST["pwd"];
$tooth =  $_POST["tooth"];
$za =  $_POST["za"];
$jet = $_POST["jet"];
$ship = $_POST["ship"];
$ttotal = $tooth * 2;
$ztotal = $za * 8;
$jtotal = $jet * 20;
$total = $ttotal + $jtotal + $ztotal;

echo"<h2>Hello $user</h2><br>Your password is: $pwd<br>";

echo"<table border=\"solid\" >
	<tbody>
		<tr>
			<td colspan=\"2\"> </td>
			<td colspan=\"2\">Quantity</td>
			<td colspan=\"2\">Cost Per Item</td>
			<td colspan=\"2\">Sub Total</td>
		</tr>
		<tr>
			<td colspan=\"2\">Toothbrush</td>
			<td colspan=\"2\">$tooth</td>
			<td colspan=\"2\">$2.00</td>
			<td colspan=\"2\">$$ttotal.00 </td>
		</tr>
		<tr>
			<td colspan=\"2\"> Pizza</td>
			<td colspan=\"2\">$za</td>
			<td colspan=\"2\">$8.00</td>
			<td colspan=\"2\">$$ztotal.00</td>
		</tr>
		<tr>
			<td colspan=\"2\">Pink Jet</td>
			<td colspan=\"2\">$jet</td>
			<td colspan=\"2\">$20.00</td>
			<td colspan=\"2\">$jtotal.00</td>
		</tr>
		<tr>
			<td colspan=\"2\">Shipping</td>";

      if($ship == "7 day"){
        echo"
    			<td colspan=\"4\">$ship</td>
    			<td colspan=\"2\">$0.00</td>";
      }else if ($ship == "3 day"){
        echo"
    			<td colspan=\"4\">$ship</td>
    			<td colspan=\"2\">$5.00</td>";
          $total = $total + 5;
      }
      else if ($ship == "Over night"){
        echo"
    			<td colspan=\"4\">$ship</td>
    			<td colspan=\"2\">$50.00</td>";
          $total = $total + 50;
      }
      echo"
		</tr>
		<tr>
			<td colspan=\"6\">Total Cost</td>
			<td colspan=\"2\">$$total.00</td>

		</tr>
	</tbody>
</table>";



?>
