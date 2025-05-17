
<?php

echo "<h1><strong>Visitor Info</strong></h1>";
$browser=$_SERVER['HTTP_USER_AGENT'] ?? 'not available';
$ip=$_SERVER['REMOTE_ADDR'] ?? '';
echo "<h4>Browser Name: $browser</h4>";
echo "<h4>IP Address: $ip</h4>";
?>
