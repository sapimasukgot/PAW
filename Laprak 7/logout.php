<?php
session_start();
session_destroy();
header("Location: halamanProfil.php?msg=Logout berhasil!");
exit();