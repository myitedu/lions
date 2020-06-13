<?php
$country = $_GET['country']??'Uzbekistan';


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/country?format=json&name=$country",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: covid-19-data.p.rapidapi.com",
        "x-rapidapi-key: 6ced4cd34dmsh6dcd81cab6a54f3p16f5a9jsn6dcff53e2541"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $response = json_decode($response) ;
}