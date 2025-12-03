<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/ValueSet-SuturNonResorberbarMultiDHDB.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/ValueSet-SuturNonResorberbarMultiDHDB.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/ValueSet-SuturNonResorberbarMultiDHDB.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/ValueSet-SuturNonResorberbarMultiDHDB.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/ValueSet-SuturNonResorberbarMultiDHDB.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/ValueSet-SuturNonResorberbarMultiDHDB.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.15.0/ValueSet-SuturNonResorberbarMultiDHDB.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
