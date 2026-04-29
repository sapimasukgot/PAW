<?php
session_start();

if(!isset($_SESSION['loggedinAsAdmin']) && !isset($_SESSION['loggedinAsMember']) ){
    header("Location: halamanEror.html");
    exit(); 
}
?>
<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin dan Member</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen font-sans">
    <div class="w-full max-w-xs bg-white p-6 rounded-xl shadow-md space-y-4">
        <h2 class="text-2xl font-bold text-center text-gray-800">Halaman Admin dan Member</h2>
        <p class="text-gray-600 text-center">Selamat datang di halaman admin dan member. Halaman ini bisa diakses oleh Admin dan Member.</p>
    </div>
</body>
</html>    