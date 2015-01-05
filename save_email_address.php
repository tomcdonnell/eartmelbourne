<?php
/*
 * vim: ts=3 sw=3 et wrap co=100 go-=b
 */

$file = fopen('saved_email_addresses.txt', 'a+');
fwrite($file, "{$_POST['email-address']}\n");
fclose($file);

header('Location: mailing_list.php?message=Email address saved.');
?>
