<?php

$list = $_POST['list'];

include "db_config.php";

mysqli_query($config, "INSERT INTO `todo` (`list`) VALUES ('$list')");

header("location:index.php");


?>