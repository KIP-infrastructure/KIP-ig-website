<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RisikofaktorerDMPN.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RisikofaktorerDMPN.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RisikofaktorerDMPN.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RisikofaktorerDMPN.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RisikofaktorerDMPN.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RisikofaktorerDMPN.html');
else 
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RisikofaktorerDMPN.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
