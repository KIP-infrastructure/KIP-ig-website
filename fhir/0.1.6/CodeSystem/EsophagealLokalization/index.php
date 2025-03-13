<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-EsophagealLokalization.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-EsophagealLokalization.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-EsophagealLokalization.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-EsophagealLokalization.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-EsophagealLokalization.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-EsophagealLokalization.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-EsophagealLokalization.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
