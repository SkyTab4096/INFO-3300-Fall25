<?php include '../view/header.php'; 
	$eventTypes = [];
	foreach ($event_types as $array) {
		foreach ($array as $event_type) {
			if (!in_array($event_type, $eventTypes)) {
				$eventTypes[] = $event_type;
			}
		}
	}
?>
	<main>
		<section>
			<h1>Edit An Event</h1>
			<form action="/events/index.php" method="post">
				<input type="hidden" value="edit_event_data" name="action">
				<input type="hidden" value="<?=$event_id?>" name="event_id">
				<table>
					<tr>
						<td>Event Name:</td>
						<td><input name="event_name" type="textbox" value="<?=$event['event_name']?>"></td>
					</tr>
					<tr>
						<td>Event Type:</td>
						<td>
							<select name="event_type" id="event_type">
								<?php foreach ($eventTypes as $eventType): ?>
									<option value="<?=$eventType?>"><?=$eventType?></option>
								<?php endforeach; ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Event Location:</td>
						<td><input name="event_location" type="textbox" value="<?=$event['event_location']?>"></td>
					</tr>
					<tr>
						<td>Event Date and Start Time:</td>
						<td><input name="start_time" type="datetime" value="<?=$event['start_time']?>"></td>
					</tr>
					<tr>
						<td>Event Date and End Time:</td>
						<td><input name="end_time" type="datetime" value="<?=$event['end_time']?>"></td>
					</tr>
					<tr>
						<td>Events Hour Duration:</td>
						<td><input name="duration" type="textbox" value="<?=$event['duration']?>"></td>
					</tr>
				</table>
				<input type="submit" value="Submit">
			</form>

		</section>
	</main>
<?php include '../view/footer.php'; ?>   
