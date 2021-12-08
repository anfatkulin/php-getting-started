<?php
declare(strict_types=1);
session_start();

if ($_SESSION) {
    session_destroy();
}

header('Location: index.php');
exit;