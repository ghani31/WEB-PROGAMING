<?php ?>

<body>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Keterangan</td>
		</tr>
	<?php for ($i=1; $i < 11; $i++) {  ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
			<?php if ($i % 2 == 0){
				echo "<p style='background-color: lightblue'>Genap.</p>";
			}else {
				echo "<p style='background-color: lightyellow'>Ganjil.</p>";
			}	
			?></td>
		</tr>
	<?php } ?>
	</table>

</body>
</html>


 