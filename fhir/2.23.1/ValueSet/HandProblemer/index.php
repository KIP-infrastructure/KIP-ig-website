<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.23.1/ValueSet-HandProblemer.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.23.1/ValueSet-HandProblemer.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.23.1/ValueSet-HandProblemer.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.23.1/ValueSet-HandProblemer.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.23.1/ValueSet-HandProblemer.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.23.1/ValueSet-HandProblemer.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.23.1/ValueSet-HandProblemer.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
