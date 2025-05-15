<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.0/ValueSet-DetectionMethodCR.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.0/ValueSet-DetectionMethodCR.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.0/ValueSet-DetectionMethodCR.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.0/ValueSet-DetectionMethodCR.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.0/ValueSet-DetectionMethodCR.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.0/ValueSet-DetectionMethodCR.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.11.0/ValueSet-DetectionMethodCR.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
