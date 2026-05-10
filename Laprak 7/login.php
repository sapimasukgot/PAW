<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = json_decode(file_get_contents('users.json'), true);

    foreach($data as $user) {
        if($user['username'] === $username && $user['password'] === $password) {
            $_SESSION['user_aktif'] = $username;
            header("Location: dashboard.php?msg=Login berhasil");
            exit();
        }
    }
    header("Location: login.php?msg=Login gagal! Pastikan username dan password benar.");
    exit();
}
?>

<form method="POST" class="bg-white p-6 rounded shadow-md w-full max-w-sm mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>
    <input type="text" name="username" placeholder="Username" required class="w-full p-2 mb-4 border rounded">
    <input type="password" name="password" placeholder="Password" required class="w-full p-2 mb-4 border rounded">
    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Login</button>
    <a href="index.php" class="block text-center text-sm mt-4 text-blue-500">Kembali</a>
</form>    