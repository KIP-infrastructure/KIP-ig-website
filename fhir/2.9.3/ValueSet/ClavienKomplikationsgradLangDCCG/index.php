<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-ClavienKomplikationsgradLangDCCG.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-ClavienKomplikationsgradLangDCCG.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-ClavienKomplikationsgradLangDCCG.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-ClavienKomplikationsgradLangDCCG.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-ClavienKomplikationsgradLangDCCG.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-ClavienKomplikationsgradLangDCCG.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.9.3/ValueSet-ClavienKomplikationsgradLangDCCG.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
