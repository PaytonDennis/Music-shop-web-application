<! DOCTYPE html>

<html>
	<head>
		<title> Classic Model Database </title>
		<link rel="stylesheet" type="text/css" href="main.css" />
	</head>
	<body>
		<main>
		<!-- display error -->
			<h1>Database Error</h1>
			<p>There was an error connecting to the database. </p>
			<p>The database must be installed and MySql must be running </p>
			<p>Please verify user name and password </p>
			<p>Error Message: <?php echo $error_message; ?> </p>
		</main>
	
	</body>

</html>