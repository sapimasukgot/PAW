<?php

$file = file_get_contents("data.txt");

if (file_exists("data.txt")) {
    echo $file;
} else {
    echo "File not found";
}