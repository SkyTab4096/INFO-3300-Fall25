<?php include '../view/header.php'; 
	$gearCategories = [];
	foreach ($gear_categories as $array) {
		foreach ($array as $gear_category) {
			if (!in_array($gear_category, $gearCategories)) {
				$gearCategories[] = $gear_category;
			}
		}
	}
?>

	<main>
		<section>
			<h1>Add Gear</h1>
			<form action="/gear/index.php" method="post">
				<input type="hidden" value="add_gear_data" name="action">
				<table>
					<tr>
						<td>Gear Name:</td>
						<td><input name="gear_name" type="textbox"></td>
					</tr>
					<tr>
						<td>Gear Description:</td>
						<td>
							<input type="text" name="gear_description">
						</td>
					</tr>
					<tr>
						<td>Gear Category:</td>
						<td>
							<select name="gear_category" id="gear_category">
								<?php foreach ($gearCategories as $category): ?>
									<option value="<?=$category?>"><?=$category?></option>
								<?php endforeach; ?>
								</select>
							</select>
						</td>
					</tr>
					<tr>
						<td>Gear Manufacturer:</td>
						<td>
							<input type="textbox" name="gear_manufacturer">
						</td>
					</tr>
				</table>
				<input type="submit" value="Submit">
			</form>
		</section>
	</main>
<?php include '../view/footer.php'; ?>