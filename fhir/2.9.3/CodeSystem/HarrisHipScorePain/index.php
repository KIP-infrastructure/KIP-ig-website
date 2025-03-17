<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/CodeSystem-HarrisHipScorePain.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/CodeSystem-HarrisHipScorePain.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/CodeSystem-HarrisHipScorePain.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/CodeSystem-HarrisHipScorePain.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/CodeSystem-HarrisHipScorePain.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/CodeSystem-HarrisHipScorePain.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/CodeSystem-HarrisHipScorePain.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
