<?php
require 'includes/session.php';
session_destroy();
header('Location: index.php');
?>