<?php
include('db_files/connect.php');

echo '<h3>lets test the db connection</h3>';

$dumb_query = "SELECT * FROM `test`";

$link = connectDB();

$result = mysqli_query( $link, $dumb_query );

$row = mysqli_fetch_assoc( $result );

print_r( $row );