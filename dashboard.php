<?php
session_start();
if (!isset($_SESSION['user_aktif'])) { header("Location: halamanProfil.php?msg=Login dulu!"); exit(); }
?>
<!DOCTYPE html>
<html>
<head><script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen text-center">
    <div class="bg-white p-8 rounded-xl shadow-lg w-96">
        <h1 class="text-2xl font-bold">Halo, <?= htmlspecialchars($_SESSION['user_aktif']) ?>!</h1>
        <p class="text-gray-500 my-4">Selamat Datang.</p>
        <div class="grid grid-cols-2 gap-2">
            <a href="update_profile.php" class="bg-yellow-500 text-white py-2 rounded">Ubah Profil</a>
            <a href="logout.php" class="bg-gray-500 text-white py-2 rounded">Logout</a>
        </div>
        <a href="delete.php" class="block mt-6 text-red-500 text-sm hover:underline">Hapus Akun Saya</a>
    </div>
</body>
</html>