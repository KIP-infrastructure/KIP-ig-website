<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-AlloplastiktypeDKR.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-AlloplastiktypeDKR.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-AlloplastiktypeDKR.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-AlloplastiktypeDKR.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-AlloplastiktypeDKR.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-AlloplastiktypeDKR.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-AlloplastiktypeDKR.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
