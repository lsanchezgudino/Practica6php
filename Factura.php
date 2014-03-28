<html>
	<body>
		<?php
			$pro1=$_POST["pro1"];
			$pro2=$_POST["pro2"];
			$pro3=$_POST["pro3"];
			$pro1Pre=$_POST["pro1Pre"];
			$pro2Pre=$_POST["pro2Pre"];
			$pro3Pre=$_POST["pro3Pre"];
			define('Iva', 0.16);
			$subTotal=$pro1Pre+$pro2Pre+$pro3Pre;
			$todIva=$subTotal*Iva;
			$total=$todIva+$subTotal;
		?>
		<table>
			<tr>
				<td><?php echo $pro1; ?></td>
				<td><?php echo $pro1Pre;?></td>
			</tr>
			<tr>
				<td><?php echo $pro2; ?></td>
				<td><?php echo $pro2Pre;?></td>
			</tr>
			<tr>
				<td><?php echo $pro3; ?></td>
				<td><?php echo $pro3Pre;?></td>
			</tr>
			<tr>
				<td>SubTotal</td>
				<td><?php echo $subTotal;?></td>
			</tr>
			<tr>
				<td>iva</td>
				<td><?php echo $todIva;?></td>
			</tr>
			<tr>
				<td>Total</td>
				<td><?php echo $total;?></td>
			</tr>
		</table>
	</body>
</html>
