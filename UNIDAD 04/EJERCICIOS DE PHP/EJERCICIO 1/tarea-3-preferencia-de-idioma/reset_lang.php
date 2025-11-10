<?php
setcookie('lang', '', time() - 3600, '/');
header('Location: index.php');
exit;