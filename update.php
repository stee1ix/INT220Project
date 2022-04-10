<?php

include "db_config.php";

$id = $_GET['id'];

mysqli_query($config, "UPDATE `todo` SET `done`='1' WHERE id=$id");

header("location:index.php");

?>