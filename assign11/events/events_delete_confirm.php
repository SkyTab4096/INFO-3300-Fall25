<?php include '../view/header.php'; ?>
	<main>
		<section>
			<h1>Delete An Event</h1>
			<form method="post" action="/events/index.php">
				<input type="hidden" name="action" value="delete_event" />
				<input type="hidden" name="event_id" value="<?= $event['event_id'] ?>" />
				<table style="border: 1px solid black">
					<tr>
						<td>Event Name</td>
						<td>Start Time</td>
						<td>Event Type</td>
						<td>Event Location</td>
						<td>Hours Duration</td>
					</tr>
					<tr>
						<td><?= $event['event_name'] ?></td>
						<td><?= $event['start_time'] ?></td>
						<td><?= $event['event_type'] ?></td>
						<td><?= $event['event_location'] ?></td>
						<td><?= $event['duration'] ?></td>
					</tr>
				</table>
				Are you sure you want to delete this event? <input type="submit" value="yes" />
			</form>
		</section>
	</main>
<?php include '../view/footer.php'; ?>