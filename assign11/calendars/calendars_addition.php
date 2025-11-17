<?php include '../view/header.php'; ?>
	<main>
		<section>
			<h1><?= $message ?></h1>
			<table>
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
					<td><?= $event['attend_probability'] ?>%</td>
				</tr>
			</table>
			<h1>All Calendar Entries</h1>
			<table>
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