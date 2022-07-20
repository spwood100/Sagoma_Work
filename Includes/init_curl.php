<?php

$headers = [
    "User-Agent: Sangoma Test Application",
    "Authorization: token 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"
];

curl_init();

$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

return $ch;