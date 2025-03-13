<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-SSSFacialParesis.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-SSSFacialParesis.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-SSSFacialParesis.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-SSSFacialParesis.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-SSSFacialParesis.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-SSSFacialParesis.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/0.1.6/CodeSystem-SSSFacialParesis.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
