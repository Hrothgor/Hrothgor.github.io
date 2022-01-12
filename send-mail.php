<?php
    $to = "jul.minguet@epitech.eu";
    $message = wordwrap("test", 70, "\r\n");
    $headers = array(
        'From' => $from,
    );
    mail($to, $subject, $message, $headers);
?>