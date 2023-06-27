<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $city = $_POST['city'];
  $course = $_POST['course'];
  echo "<script>alert('Thanks for your infomation , We will reach out to u soon!');</script>";
}
?>
