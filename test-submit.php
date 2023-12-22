<?php

// Check if form fields are set in the $_POST array
if (isset($_POST['company-name'], $_POST['location'], $_POST['poc-name'], $_POST['email'], $_POST['number'])) {

    // Collect form data
    $cname = $_POST['company-name'];
    $location = $_POST['location'];
    $poc = $_POST['poc-name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];

    // API endpoint URL
    $apiUrl = 'https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u%24r90762783ae2ff654ef80d4140a55cb40&secretKey=1d3e9e5234f49072cd263f51626b6c5b0be694ae';

    // Prepare POST data
    $postData = [
        'FirstName' => $cname,
        'LastName' => $location,
        'PocName' => $poc,
        'EmailAddress' => $email,
        'Phone' => $phone,
        'Source' => 'Web Form',
        // Add other fields as needed
    ];

    // Initialize cURL session
    $ch = curl_init($apiUrl);

    // Set cURL options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);

    // Execute cURL session and get the API response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    // Check for errors in the API response
    $responseData = json_decode($response, true);

    if ($responseData && isset($responseData['Status']) && $responseData['Status'] === 'Error') {
        echo 'Leadsquared API Error: ' . $responseData['ExceptionMessage'];
    } else {
        // Output the API response
        echo $response;
    }
}

// Close cURL session
curl_close($ch);

} else {
    // Handle the case when form fields are not set
    echo '{"Status":"Error","Message":"Form fields are not set or are missing."}';
}
?>
