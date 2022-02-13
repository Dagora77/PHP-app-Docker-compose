<?php
session_start();

$conn = mysqli_connect(
  'db',
  'root',
  'MYSQL_ROOT_PASSWORD',
  'php-mysql-crud'
) or die(mysqli_erro($mysqli));

?>
