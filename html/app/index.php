<?php
 
require_once 'source/PHPGangsta/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();
$secret = $ga->createSecret();
$title = 'MyTestApp';
$name = 'sirakaba';

$qrCodeUrl = $ga->getQRCodeGoogleUrl($name, $secret, $title);
echo "秘密鍵のQRコードURL:{$qrCodeUrl}\n\n";

// $secret = 'EQXAPJ6ISAK5VM7U';
// // ユーザーが生成したTOTP
// $oneCode = filter_input($ga->getCode($secret), 'oneCode');
// // サーバーとクライアントで許容する時間のずれ
// $discrepancy = 2;

// $checkResult = $ga->verifyCode($secret, $oneCode, $discrepancy);    // 2 = 2*30sec clock tolerance

// if ($checkResult) {
//     echo 'OK';
// } else {
//     echo 'FAILED';
// }


