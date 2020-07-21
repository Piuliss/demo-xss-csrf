<html>
<head><title>Message list</title></head>
<body>
<h1>Message list</h1>
<ul>
<?php
require_once dirname(__FILE__) . '/private/conf.php';

$query = "SELECT messageId, username, body FROM messageTable LEFT JOIN userTable"
	. " ON messageTable.userId = userTable.userId order by messageId desc";

$result = $db->query($query);

while ($row = $result->fetchArray()) {
	echo "<li>User: <b>" . $row[1] . "</b><br>Text: " . $row[2]
	. " <a href=\"edit_message.php?id=$row[0]\">(edit message)</a></li>\n";	
}

?>
</ul>
</body>
</html>
