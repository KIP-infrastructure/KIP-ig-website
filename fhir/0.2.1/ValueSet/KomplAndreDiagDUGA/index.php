<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.2.1/ValueSet-KomplAndreDiagDUGA.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.2.1/ValueSet-KomplAndreDiagDUGA.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.2.1/ValueSet-KomplAndreDiagDUGA.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.2.1/ValueSet-KomplAndreDiagDUGA.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.2.1/ValueSet-KomplAndreDiagDUGA.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.2.1/ValueSet-KomplAndreDiagDUGA.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/0.2.1/ValueSet-KomplAndreDiagDUGA.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
