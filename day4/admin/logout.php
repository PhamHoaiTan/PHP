<?php
session_start();
// delete session
session_destroy();
header("location: login.php"); 