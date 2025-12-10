<?php include '../view/header.php'; ?>
	<main>
		<section>
			<h1>Add An Utensil</h1>
			<form action="/utensils/index.php" method="post">
				<input type="hidden" value="add_utensil_data" name="action">
				Utensil Name: <input type="textbox" name="utensil_name"><br/>
				Utensil Description: <input type="textbox" name="utensil_description"><br/>
				Utensil Type: <select name="utensil_type" id="utensil_type"><br/>
					<?php foreach ($utensil_types as $utensil_type): ?>
						<option value="<?=$utensil_type?>"><?=$utensil_type?></option>
					<?php endforeach; ?>
				</select><br/>
				Utensil Year Purchased: <input type="textbox" name="utensil_year_purchased"><br/>
				<input type="submit" value="Submit">
			</form>
		</section>
	</main>
<?php include '../view/footer.php'; ?>