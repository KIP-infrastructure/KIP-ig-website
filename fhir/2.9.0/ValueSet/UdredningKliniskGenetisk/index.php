<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.0/ValueSet-UdredningKliniskGenetisk.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.0/ValueSet-UdredningKliniskGenetisk.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.0/ValueSet-UdredningKliniskGenetisk.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.0/ValueSet-UdredningKliniskGenetisk.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.0/ValueSet-UdredningKliniskGenetisk.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.0/ValueSet-UdredningKliniskGenetisk.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.9.0/ValueSet-UdredningKliniskGenetisk.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
