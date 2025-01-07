<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RevisionstypeDSR.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RevisionstypeDSR.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RevisionstypeDSR.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RevisionstypeDSR.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RevisionstypeDSR.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RevisionstypeDSR.html');
else 
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-RevisionstypeDSR.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
