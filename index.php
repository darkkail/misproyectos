<?php
require_once './vendor/autoload.php';

use Transbank\Webpay\Webpay;
use Transbank\Webpay\Configuration;

$transaction = (new Webpay(Configuration:: forTestingWebpayPlusNormal()))
                ->getNormalTransaction();

$amount = 10000;
$sessionId = 'sessionId';
$buyOrder = strval(rand(10000, 9999999));
$returnUrl = "http://localhost:8080/webpay/return.php";
$finalUrl = "http://localhost:8080//webpay/final.php";

$initResult = $transaction->initTransaction($amount, $sessionId, $buyOrder, $returnUrl, $finalUrl);

$formAction = $initResult->url;
$tokenWs = $initResult->token;


?>

<!DOCTYPE html> 
<html lang ="es">
<head>
	<title>EJEMPLO DE Webpay</title>
    <link href = "css/bootstrap.min.css" rel="stylesheet">"
</head>
<body>
    <div class="container">
        <div class ="col-md-6 col-md-offset-3">
        <h2>PAGO WEBPAY</h2>
        <P><b>Valor</b>:<?php echo $amount?></p>
        <P><b>Orden de compra</b>:<?php echo $buyOrder?></p>
        
    <form action="<?php echo $formAction ?>" method="POST" class ="form-inline" role="form">
    <input type ="hidden" name ="token_ws" value="<?php echo $tokenWs ?>">
    <button type ="submit" class = "btn btn-primary"> Pagar</button>
    </form>
       </div>
    </div>


</body>
</html>