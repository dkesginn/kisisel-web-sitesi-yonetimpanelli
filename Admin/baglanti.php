<?php

try {
    $baglan = new PDO('mysql:host=localhost;dbname=firma', 'root', '');
} catch (\Exception $e) {
    echo $e->getMessage();
}
