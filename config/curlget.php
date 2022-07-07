<?php
    $ch = curl_init();

    $url = "https://type.fit/api/quotes";

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resp = curl_exec($ch);

    if ($e = curl_error($ch)) {
        echo $e;
    } else {
        $decoded = json_decode($resp, true);
        echo $decoded[0]['text'];
    }

    curl_close($ch);

?>