<?php
$serverName=$_SERVER['SERVER_NAME'] ?? '';
$serverSoftware=$_SERVER['SERVER_SOFTWARE'] ?? '';
$serverProtocol=$_SERVER['SERVER_PROTOCOL'] ?? '';
echo "<h1>Server Name:  $serverName </h1>";
echo "<h1>Server Software: $serverSoftware</h1>";
echo "<h1>Server Protocol: $serverProtocol</h1>";
?>