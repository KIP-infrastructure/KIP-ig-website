<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.12.0/ValueSet-RytmeDefibrilleringMetode.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.12.0/ValueSet-RytmeDefibrilleringMetode.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.12.0/ValueSet-RytmeDefibrilleringMetode.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.12.0/ValueSet-RytmeDefibrilleringMetode.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.12.0/ValueSet-RytmeDefibrilleringMetode.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.12.0/ValueSet-RytmeDefibrilleringMetode.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.12.0/ValueSet-RytmeDefibrilleringMetode.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
