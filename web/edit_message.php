<?php
require_once dirname(__FILE__) . '/private/conf.php';

# Require logged users
require dirname(__FILE__) . '/private/auth.php';

if (isset($_POST['id']) && isset($_POST['body'])) {
	# Just in from POST => save to database
	$id = $_POST['id'];
	$text = $_POST['body'];
	
	// FIXME #1
	$id = SQLite3::escapeString($id);
	$text = SQLite3::escapeString($text);

	if ($id != 0) {
		$query = "INSERT OR REPLACE INTO messageTable (messageId, userId, body) VALUES ('$id', '$userId', '$text')";
	} else {
		$query = "INSERT INTO messageTable (userId, body) VALUES ('$userId', '$text')";
	}

	$db->query($query) or die("Invalid query");
} else {
	# New/modify
	if (isset($_GET['id'])) {
		# Edit from database
		$id = $_GET['id'];
	
		$query = SQLite3::escapeString("SELECT body FROM messageTable WHERE messageId = $id");

		$result = $db->query($query) or die ("$query");
		$row = $result->fetchArray() or die ("modifying a nonexistent message!");
	
		$text = $row[0];
	} else {
		# Post new message
		$id = "0";
		$text = "";
	}
}

# Show form

?><html><head><title>Message editor</title></head>
<body>
<h1>Message editor</h1>
<form action="#" method="post">
<input type="hidden" name="id" value="<?=$id?>"><br>
<textarea name="body"><?=$text?></textarea><br>
<input type="submit" value="Send"><br>
</form><br>
<form action="#" method="post">
<a href="list_messages.php">List Messages</a>
<input type="submit" name="Logout" value="Logout">
</form>
<br>
</body></html>

