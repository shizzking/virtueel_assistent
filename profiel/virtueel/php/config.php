<?php
$db = mysqli_connect("localhost", "root", "", "virtueel_assistent") or die ("Could not connect to the Database".mysqli_error($db));
session_start();