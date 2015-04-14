<?php


function get_all_user(){
	/* return all garden, garden have these attributes:
		id, nama, lokasi */

	$mysqli = new mysqli("localhost", "root", "", "tubessi");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$result = $mysqli->query("SELECT * FROM user");
	$rows = array();
	for ($i = 0; $i < $result->num_rows; ++$i) {
		$row = $result->fetch_assoc();
		$rows[$i] = $row;
	}

	/* close connection */
	$mysqli->close();

	return $rows;
}


function get_all_pelayanan() {
	$mysqli = new mysqli("localhost", "root", "", "tubessi");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$result = $mysqli->query("SELECT * FROM pelayanan;");
	$rows = array();
	for ($i = 0; $i < $result->num_rows; ++$i) {
		$row = $result->fetch_assoc();
		$rows[$i] = $row;
	}

	/* close connection */
	$mysqli->close();

	return $rows;
}

function get_all_inventaris() {
	$mysqli = new mysqli("localhost", "root", "", "tubessi");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$result = $mysqli->query("SELECT * FROM inventaris;");
	$rows = array();
	for ($i = 0; $i < $result->num_rows; ++$i) {
		$row = $result->fetch_assoc();
		$rows[$i] = $row;
	}

	/* close connection */
	$mysqli->close();

	return $rows;
}


?>
