<?php include '../view/header.php'; ?>
	<main>
		<section>
			<h1>All Gear</h1>
			<?php echo $message . '<br/>'; ?>
			<a href="/gear/index.php?action=add_gear">Add Gear</a>
			<table>
				<tr>
					<td><b>Gear Name</b></td>
					<td><b>Gear Description</b></td>
					<td><b>Gear Category</b></td>
					<td><b>Gear Manufacturer</b></td>
				</tr>
				<?php foreach ($gears as $gear): ?>
				<tr>
					<td><?= $gear['gear_name'] ?></td>
					<td><?= $gear['gear_description'] ?></td>
					<td><?= $gear['gear_category'] ?></td>
					<td><?= $gear['gear_manufacturer'] ?></td>
				</tr>
				<?php endforeach; ?>
			</table>
		</section>
	</main>
<?php include '../view/footer.php'; ?>

