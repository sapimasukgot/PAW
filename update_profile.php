<?php
session_start();
if (!isset($_SESSION['user_aktif'])) { header("Location: index.php"); exit(); }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents('users.json'), true);
    foreach ($data as $key => $user) {
        if ($user['username'] == $_SESSION['user_aktif']) {
            $data[$key]['password'] = $_POST['new_password'];
        }
    }
    file_put_contents('users.json', json_encode($data, JSON_PRETTY_PRINT));
    header("Location: dashboard.php?msg=Password berhasil diubah!");
    exit();
}
?>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form method="POST" class="bg-white p-8 rounded shadow-md w-80">
        <h2 class="font-bold mb-4">Ubah Password</h2>
        <input type="password" name="new_password" placeholder="Password Baru" class="border w-full p-2 mb-4" required>
        <button type="submit" class="bg-yellow-500 text-white w-full py-2 rounded">Simpan</button>
        <a href="dashboard.php" class="block text-center text-sm mt-4 text-blue-500">Batal</a>
    </form>
</body>