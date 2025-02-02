<?php # Script 10.1 - view_users.php #3
// This script retrieves all the records from the users table.
// This new version links to edit and delete pages.

$page_title = 'View the Current Users';
include('header.php');
echo '<h1>Registered Users</h1>';

require('./pdo_connect.php');

// Define the query:
$q = "SELECT last_name, first_name, DATE_FORMAT(registration_date, '%M %d, %Y') AS dr, user_id FROM users ORDER BY registration_date ASC";

$result = $pdo->query($q);
$rows=$result->fetchAll();

//print_r($rows);

// Count the number of returned rows:
$num = count($rows);

if ($num > 0) { // If it ran OK, display the records.

	// Print how many users there are:
	echo "<p>There are currently $num registered users.</p>\n";

	// Table header:
	echo '<table width="60%">
	<thead>
	<tr>
		<th align="left"><strong>Edit</strong></th>
		<th align="left"><strong>Delete</strong></th>
		<th align="left"><strong>Last Name</strong></th>
		<th align="left"><strong>First Name</strong></th>
		<th align="left"><strong>Date Registered</strong></th>
	</tr>
	</thead>
	<tbody>
	';

	// Fetch and print all the records:
	//while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	foreach ($rows as $row) {
		// code...
		echo '<tr>
			<td align="left"><a href="edit_user.php?id=' . $row['user_id'] . '">Edit</a></td>
			<td align="left"><a href="delete_user.php?id=' . $row['user_id'] . '">Delete</a></td>
			<td align="left">' . $row['last_name'] . '</td>
			<td align="left">' . $row['first_name'] . '</td>
			<td align="left">' . $row['dr'] . '</td>
		</tr>
		';
	}

	echo '</tbody></table>';


} else { // If no records were returned.
	echo '<p class="error">There are currently no registered users.</p>';
}


include('footer.php');
?>