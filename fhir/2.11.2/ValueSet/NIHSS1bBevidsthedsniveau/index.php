<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-NIHSS1bBevidsthedsniveau.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-NIHSS1bBevidsthedsniveau.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-NIHSS1bBevidsthedsniveau.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-NIHSS1bBevidsthedsniveau.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-NIHSS1bBevidsthedsniveau.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-NIHSS1bBevidsthedsniveau.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-NIHSS1bBevidsthedsniveau.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
