<?php
require_once "session.php";
session_start();
$session = new SessionCounter();

$session->set(0);
header("Location: index.php");
exit;
?>
