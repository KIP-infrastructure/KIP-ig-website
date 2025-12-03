<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/CodeSystem-ScoreCentralBlock.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/CodeSystem-ScoreCentralBlock.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/CodeSystem-ScoreCentralBlock.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/CodeSystem-ScoreCentralBlock.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/CodeSystem-ScoreCentralBlock.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/CodeSystem-ScoreCentralBlock.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/CodeSystem-ScoreCentralBlock.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
