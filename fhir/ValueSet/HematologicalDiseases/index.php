<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-HematologicalDiseases.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-HematologicalDiseases.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-HematologicalDiseases.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-HematologicalDiseases.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-HematologicalDiseases.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-HematologicalDiseases.html');
else 
  Redirect('https://kip.sundk.dk/fhir/0.0.9/ValueSet-HematologicalDiseases.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
