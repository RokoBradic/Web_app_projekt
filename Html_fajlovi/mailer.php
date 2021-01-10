<?php $name = $_POST['name'];
  $email = $_POST['email'];
  $drzava = $_POST['drzava'];
  $grad = $_POST['grad'];
  $phone = $_POST['phone'];
  $dropdown = $_POST['dropdown'];
  $message = $_POST['message'];
  $formcontent="Ja sam: $name \n Dolazim iz: $drzava \n Iz grada: $grad \n Moje pismo: $message \n Zelim: $dropdown \n Broj mobitela je: $phone";
  $recipient = "i_varenica@hotmail.com";
  $subject = "POKLON ZA BOZIC";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  header('Location: thank_u.html'); ?>
