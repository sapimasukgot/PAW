<?php
session_start();
$pesan = isset($_GET['msg']) ? $_GET['msg'] : "";
$is_login = isset($_SESSION['user_aktif']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem CRUD JSON</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm bg-white p-8 rounded-xl shadow-md space-y-4">
        <h2 class="text-2xl font-bold text-center">Menu Utama</h2>

        <?php if($pesan): ?>
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-3 text-sm font-bold">
                <?= htmlspecialchars($pesan) ?>
            </div>
        <?php endif; ?>

        <div class="flex flex-col gap-3">
            <a href="register.php" class="bg-green-500 text-white p-2 rounded text-center">Buat Akun (Register)</a>
            <a href="login.php" class="bg-blue-500 text-white p-2 rounded text-center">Login</a>
    </div>
</body>
</html>