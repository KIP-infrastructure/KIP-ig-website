<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.1/ValueSet-TransplantationcenterALG.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.1/ValueSet-TransplantationcenterALG.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.1/ValueSet-TransplantationcenterALG.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.1/ValueSet-TransplantationcenterALG.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.1/ValueSet-TransplantationcenterALG.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.1/ValueSet-TransplantationcenterALG.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.9.1/ValueSet-TransplantationcenterALG.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
