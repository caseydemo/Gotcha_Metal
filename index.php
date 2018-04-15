<?php
//	php error log
// tail -f /var/log/apache2/error.log
include( 'db_files/connect.php' );
include( 'includes/links.php' );
?>
<!DOCTYPE html>
<html>
<head>
	<!-- CUSTOM STYLESHEET -->
	<link rel="stylesheet" href="includes/styles.css">

	<title>Gotcha Metal Band Lexington</title>
</head>
<body>
<h3>whats this about?</h3>
</body>
</html>
<?php
echo '<h3>lets test the db connection</h3>';

$dumb_query = "SELECT * FROM `test`";

$link = connectDB();

$result = mysqli_query( $link, $dumb_query );

$row = mysqli_fetch_assoc( $result );

print_r( $row );