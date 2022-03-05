<?php
// нужно прописать на сервере
// 123
echo "работает";

file_put_contents(__DIR__ . '/log.txt', file_get_contents('php://input'));
?>
