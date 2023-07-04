<?php
$curl = curl_init('https://www....');
curl_setopt($curl, CURLOPT_POSTFIELDS, [
    'field1' => 'value1',
]);

//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, true);
curl_setopt($curl, CURLOPT_TIMEOUT, 30);

if ($debugMode) {
    curl_setopt($curl, CURLOPT_VERBOSE, true);
    $verbose = fopen('php://temp', 'w+');
    curl_setopt($curl, CURLOPT_STDERR, $verbose);
}
$result = curl_exec($curl);

if ($result === FALSE) {
    printf("cUrl error (#%d): %s<br>\n", curl_errno($curl),
        htmlspecialchars(curl_error($curl)));
}

rewind($verbose);
$verboseLog = stream_get_contents($verbose);

var_dump($result);
