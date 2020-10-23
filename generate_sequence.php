<?php

// просто случайный ключ
$key = hash('sha1', mt_rand(1000000, mt_getrandmax())); 

// хеш из любой строки. Для старых версий PHP.
$hash = base64_encode(pack("H*", md5($str))); 

// хеш с алгоритмом sha256. Наиболее предпочтительно для PHP 7+
$hash = base64_encode(hash('sha256', $string, true)); 
