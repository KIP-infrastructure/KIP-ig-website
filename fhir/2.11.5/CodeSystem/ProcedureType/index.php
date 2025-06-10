<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.5/CodeSystem-ProcedureType.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.5/CodeSystem-ProcedureType.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.5/CodeSystem-ProcedureType.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.5/CodeSystem-ProcedureType.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.5/CodeSystem-ProcedureType.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.5/CodeSystem-ProcedureType.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.11.5/CodeSystem-ProcedureType.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
