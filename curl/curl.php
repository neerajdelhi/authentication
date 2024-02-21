<?php 

// Using curl
// Initialize a curl session
$ch = curl_init();

// Set the URL, method, and headers
curl_setopt($ch, CURLOPT_URL, "https://uat-rfqepay.bseindia.com/token");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"Content-Type: application/x-www-form-urlencoded"
));

// Set the body parameters
$body = array(
"username" => "mMMFhybgZwD1hms2/SSsQ2/f4aeQVfrCHlseVeN",
"password" => "L9siWhTupwVp+XWIHNy/7V07AkSLw9UmjMeaJ85",
"grant_type" => "password"
);

// Encode the body as a query string
$body = http_build_query($body);

// Set the body as the post fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

// Execute the request and get the response
$response = curl_exec($ch);

// Close the curl session
curl_close($ch);

// Print the response
echo $response;