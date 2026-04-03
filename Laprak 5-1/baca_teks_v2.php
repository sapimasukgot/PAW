<?php

$file = fopen("data.txt", "r");

if (file_exists("data.txt")) {
    while (!feof($file)) {
        echo fgets($file);
    }
    echo $file;
} else {
    echo "File not found";
}