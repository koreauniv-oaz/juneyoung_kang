<?php
include('include/dbconfig.php');
session_start();
session_destroy();
die('<script>alert("logout"); location.href="./index.php";</script>');
?>