<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.4/ValueSet-ImplantattypeDUGA.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.4/ValueSet-ImplantattypeDUGA.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.4/ValueSet-ImplantattypeDUGA.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.4/ValueSet-ImplantattypeDUGA.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.4/ValueSet-ImplantattypeDUGA.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.4/ValueSet-ImplantattypeDUGA.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.9.4/ValueSet-ImplantattypeDUGA.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
