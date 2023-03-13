<?php

session_start();
session_destroy();

header('location: ./handle.php');
exit;
