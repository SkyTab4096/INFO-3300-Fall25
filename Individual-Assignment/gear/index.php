<?php
require '../model/gear_db.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
	$action = filter_input(INPUT_GET, 'action');
	if ($action == NULL) {
		$action = 'list_gear';
	}
}

if ($action == 'list_gear') {
	$gears = get_gear();
	$message = filter_input(INPUT_GET, 'message');
	if ($message == NULL) {
		$message = '';
	}
	include 'gear_list.php';
} else if ($action == 'add_gear') {
	$gear_categories = get_gear_categories();
	include 'gear_add.php';
} else if ($action == 'add_gear_data') {
	$gear_name = filter_input(INPUT_POST, 'gear_name');
	$gear_description = filter_input(INPUT_POST, 'gear_description');
	$gear_category = filter_input(INPUT_POST, 'gear_category');
	$gear_manufacturer = filter_input(INPUT_POST, 'gear_manufacturer');
	$row_count = add_gear($gear_name, $gear_description, $gear_category, $gear_manufacturer);
	header("Location: /gear/index.php?action=list_gear&message={$gear_name} was added.");
}