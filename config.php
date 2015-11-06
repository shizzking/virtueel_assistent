<?php
$db = mysqli_connect("localhost", "root", "", "virtueel_assistent") or die ("Could not connect to the Database".mysqli_error($db));
session_start();

# errors weergeven
ini_set('display_errors',1); // 1 == aan , 0 == uit
error_reporting(E_ALL | E_STRICT);

# sql debug
define('DEBUG_MODE',false);  // true == aan, false == uit

