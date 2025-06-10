<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/CodeSystem-NIHSS6MotorLeg.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/CodeSystem-NIHSS6MotorLeg.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/CodeSystem-NIHSS6MotorLeg.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/CodeSystem-NIHSS6MotorLeg.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/CodeSystem-NIHSS6MotorLeg.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/CodeSystem-NIHSS6MotorLeg.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/CodeSystem-NIHSS6MotorLeg.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
