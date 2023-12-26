<?php
$name = "IssueName";
$count = 10; // размерность шарда

$shard = abs(crc32($name)) % $count;
