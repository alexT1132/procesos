<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'procesos'
) or die(mysqli_error($mysqli));

?>