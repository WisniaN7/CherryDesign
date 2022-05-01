<?php

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $subject = $name." Wysał/a wiadomość.";
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "contact@cherrydesign.com.pl";
  $headers = "From: ".$mailFrom;
  $txt = $name." Wysał/a wiadomość.\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: http://cherrydesign.com.pl/kontakt.html?mailsent");
}
