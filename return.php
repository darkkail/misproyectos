<?php
require_once './vendor/autoload.php';

use Transbank\Webpay\Webpay;
use Transbank\Webpay\Configuration;

$transaction = (new Webpay(Configuration:: forTestingWebpayPlusNormal()))
                ->getNormalTransaction();

$tokenWs = filter_input(INPUT_POST, 'token_ws');
$result = $transaction->getTransactionResult($tokenWs);
$output = $result->detailOutput;
if($output->responseCode == 0 ){
    echo '<script>window.localStorage.clear();</script>';
    echo '<script>window.localStorage.setItem("authorizationCode", '. $output->authorizationCode .')</script>';
    echo '<script>window.localStorage.setItem("amount", '. $output->amount .');</script>';
    echo '<script>window.localStorage.setItem("responseCode", '. $output->responseCode .');</script>';
    }


?>
<!--REDIRIGIR AL USUARIO AL FORMULARIO WEBPAY-->

<?php if($output->responseCode ==0) : ?>
<form action ="<?php echo $result->urlRedirection ?>" method="post" id="return-form">
    <input type="hidden" name="token_ws" value ="<?php $tokenWs ?>">
</form>
<script>
    document.getElementById('return-form').submit();
</script>
<?php endif; ?>