
<?php

$getCountriesUrl= "https://restcountries.com/v3.1/all";
$query = curl_init($getCountriesUrl);
curl_setopt($query, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($query);
if (curl_error($query)) {
    die("Error: " . curl_error($result));
} else {
    file_put_contents("countries.json", $result);
    $data = json_decode($result, true);
    foreach ($data as $item) {
        echo $item["flags"]["svg"] . "<br>";
    }
    curl_close($query);
}
