<?php

  $email = "no-reply@teamkaidence.com";
  $subject = "Donation Made";
  $message = "There has been a new donation made to Team Kaidence";
  mail("whitink@gmail.com", "Team Kaidence: $subject", $message, "From: $email" );

?>