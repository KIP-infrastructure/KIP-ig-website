<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.14.1/ValueSet-ProcedureUdfoertR1DCCG.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.14.1/ValueSet-ProcedureUdfoertR1DCCG.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.14.1/ValueSet-ProcedureUdfoertR1DCCG.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.14.1/ValueSet-ProcedureUdfoertR1DCCG.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.14.1/ValueSet-ProcedureUdfoertR1DCCG.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.14.1/ValueSet-ProcedureUdfoertR1DCCG.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.14.1/ValueSet-ProcedureUdfoertR1DCCG.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
