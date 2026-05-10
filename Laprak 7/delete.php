<?php
session_start();
if (isset($_SESSION['user_aktif'])) {
    $target = $_SESSION['user_aktif'];
    $data = json_decode(file_get_contents('users.json'), true);
    $newData = array_filter($data, function($user) use ($target) {
        return $user['username'] !== $target;
    });
    file_put_contents('users.json', json_encode(array_values($newData), JSON_PRETTY_PRINT));
    session_destroy();
    header("Location: halamanProfil.php?msg=Akun $target telah dihapus.");
    exit();
}