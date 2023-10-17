<?php

$api = "https://restcountries.com/v3.1/all";
$query = curl_init($api);
curl_setopt($query, CURLOPT_RETURNTRANSFER, true);
curl_setopt($query, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($query, CURLOPT_SSL_VERIFYHOST, false);
$result = curl_exec($query);
if (curl_error($query)) {
    die("Error: " . curl_error($query));
} else {
    $data = json_decode($result, true);
    foreach ($data as $item) {
        $flagUrl = $item["flags"]["svg"];
        $fileInfo = pathinfo($flagUrl);
        $extension = $fileInfo["extension"];
        $fileName = $item["cca2"] . '.' . $extension;
        $image = file_get_contents($flagUrl);
        file_put_contents("public/imgs/" . $fileName, $image);
    }
}
?>

