<?php
    $ch = curl_init();

    $url = "https://type.fit/api/quotes";

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resp = curl_exec($ch);


   
    if ($e = curl_error($ch)) {
        echo $e;
    } else {
        $quote = json_decode($resp, true);

        $key = array_rand($quote);
        $value_quote =  $quote[$key]['text'];
        $value_author = $quote[$key]['author_name'];
        $check_author = strlen($value_author) < 1;

        if ($check_author == 1) {
            $value_author = "Unknown";
        }

        echo $value_author . " and " . $value_quote;
    }

    curl_close($ch);

?>