<?php
// для сервера
echo "работает";

file_put_contents(__DIR__ . '/log.txt', file_get_contents('php://input'));
?>
