<?php include '../view/header.php'; ?>
	<main>
		<section>
			<h1>All Events</h1>
			<?php echo $message . '<br/>'; ?>
			<a href="/events/index.php?action=add_event">Add Event</a>
			<table style="border: 1px solid black">
				<tr>
					<td>EventName</td>
					<td>StartTime</td>
					<td>Event Type</td>
					<td>Event Location</td>
					<td>Hours Duration</td>
					<td>Action</td>
					<td>Modify</td>
				</tr>
				<?php foreach ($events as $event): ?>
					<tr>
						<td><?= $event['event_name'] ?></td>
						<td><?= $event['start_time'] ?></td>
						<td><?= $event['event_type'] ?></td>
						<td><?= $event['event_location'] ?></td>
						<td><?= $event['duration'] ?></td>
						<td><a href='../calendars/index.php?action=add_first&event_id=<?= $event['event_id'] ?>'>Add to Calendar</a></td>
						<td><a href='/events/index.php?action=edit_event&event_id=<?= $event['event_id'] ?>'>Edit</a> | 
							<a href='/events/index.php?action=delete_event_confirm&event_id=<?= $event['event_id'] ?>'>Delete</a></td>
					</tr>
				<?php endforeach; ?>
			</table>
		</section>
	</main>
<?php include '../view/footer.php'; ?>