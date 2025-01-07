<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-MorsDiagnosegrupper.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-MorsDiagnosegrupper.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-MorsDiagnosegrupper.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-MorsDiagnosegrupper.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-MorsDiagnosegrupper.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-MorsDiagnosegrupper.html');
else 
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-MorsDiagnosegrupper.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
