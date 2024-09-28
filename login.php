<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'Gr7' && $password == '12345') {
        echo 'success';
    } else {
        echo 'Invalid username or password';
    }
?>
