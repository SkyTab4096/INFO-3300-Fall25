<?php include '../view/header.php'; ?>
	<main>
		<section>
			<h1>Add Event to Calendar</h1>
			<form action="/calendars/index.php" method="POST">
				<input type="hidden" name="action" value="add_second" />
				<input type="hidden" name="event_id" value="<?= $event['event_id'] ?>" />
				<table style="border: 1px solid black">
					<tr>
						<td>Event Name</td>
						<td>Event Start Time</td>
						<td>Event Location</td>
						<td>Attendance Probability</td>
					</tr>
					<tr>
						<td><?= $event['event_name'] ?></td>
						<td><?= $event['start_time'] ?></td>
						<td><?= $event['event_location'] ?></td>
						<td>'Enter Attendance Probability:
							<input name="probability" type="text" size="3" />
							<input type="submit" value="submit" />
						</td>
					</tr>
				</table>
			</form>
			<h1>Events Currently in Calendar</h1>
			<table style="border: 1px solid black">
				<tr>
					<td>Event Name</td>
					<td>Event Start Time</td>
					<td>Event Location</td>
					<td>Attendance Probability</td>
				</tr>
				<?php foreach ($calendars as $calendar): ?>
					<tr>
						<td><?= $calendar['event_name'] ?></td>
						<td><?= $calendar['start_time'] ?></td>
						<td><?= $calendar['event_location'] ?></td>
						<td><?= $calendar['attend_probability'] ?>%</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</section>
	</main>
<?php include '../view/footer.php'; ?>