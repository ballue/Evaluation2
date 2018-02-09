<?php
// Créer une fonction permettant de convertir un montant en euros vers un montant en dollars américains.
function convertTo($amount,$devise){
if ($devise == 'USD')
return $amount * 1.085965;
else
return $amount;
}
echo convertTo(76,'USD').'<br>';
echo convertTo(76,'EUR');

?>
