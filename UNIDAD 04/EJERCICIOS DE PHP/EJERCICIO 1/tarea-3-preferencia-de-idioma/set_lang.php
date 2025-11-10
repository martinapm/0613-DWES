<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$lang = $_POST['lang'] ?? null;


if ($lang === 'es' || $lang === 'en') {
$caducidad = time() + (365 * 24 * 60 * 60);
setcookie('lang', $lang, $caducidad, '/');
}
}
header('Location: index.php');
exit;