<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.12.1/ValueSet-SKSExtraModularDisease.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.12.1/ValueSet-SKSExtraModularDisease.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.12.1/ValueSet-SKSExtraModularDisease.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.12.1/ValueSet-SKSExtraModularDisease.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.12.1/ValueSet-SKSExtraModularDisease.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.12.1/ValueSet-SKSExtraModularDisease.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.12.1/ValueSet-SKSExtraModularDisease.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
