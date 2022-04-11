<?php
require_once("vendor/autoload.php");


$test_keys= array(
	"publishable_key" => trim("pk_test_51KkyJuK0qVoL47jdEikS3QxraFdJSdzoMPN8Q9X0du6pbbvoOzAmXl3amXI7l4o2EldVworBL5EKPNqrq4bvb7vT00N2ar1xfE"),
	"secret_key" =>  trim("sk_test_51KkyJuK0qVoL47jdJHvxBPrznMjRpfHUzcTETdUdUFnme3r8ByaB7dCLq5o2ZozkKdqMyz8pos2lqcG2WMunfyKT00XVFSMSRi")

);

 
\Stripe\Stripe::SetApiKey($test_keys['secret_key']);
?>


