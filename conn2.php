<?php
// mysqli
$mysqli = new mysqli("localhost", "root", "kodc@1234", "demodpt");
$result = $mysqli("select * from user_details");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']);
?>
