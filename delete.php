<?php

include "db_config.php";

$id = $_GET['id'];

mysqli_query($config, "DELETE FROM `todo` WHERE id=$id");

header("location:index.php");


?>