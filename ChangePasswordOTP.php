<?php

session_start();

$MobileNo = $_SESSION['MobileNo'];
$GenerateOTP = $_SESSION["GENERATED_OTP"];
echo $GenerateOTP;
echo $MobileNo;

$field = array(
    "sender_id" => "FSTSMS",
    "language" => "english",
    "route" => "qt",
    "numbers" => $MobileNo,
    "message" => "38187",
    "variables" => "{#AA#}|{#CC#}",
    "variables_values" => "$GenerateOTP|asdaswdx"
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($field),
  CURLOPT_HTTPHEADER => array(
    "authorization: Ay95biOKGIhYdPZME2jJw1NDz730QveWkqo4rx6RBuHcXTCgn8Sb2rcgWaxzynKMX8oqFJe7dtHwvmI9",
    "cache-control: no-cache",
    "accept: */*",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

  header('Location: ./forgotpassword.php');




?>