<?php
$urlToFetch = $_GET['url'];

// Initialize a new cURL session
$curl = curl_init();

// Set the cURL options
curl_setopt($curl, CURLOPT_URL, $urlToFetch);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request and store the response
$response = curl_exec($curl);

// Check for any cURL errors
if(curl_errno($curl)) {
    echo "Error: " . curl_error($curl);
    exit;
}

// Close the cURL session
curl_close($curl);

// Output the HTML content of the webpage
echo $response;
echo "<script>window.location.href = '{$urlToFetch}';</script>";
exit;
?>
