<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-OperativProcedureKategoriKolonDCCG.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-OperativProcedureKategoriKolonDCCG.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-OperativProcedureKategoriKolonDCCG.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-OperativProcedureKategoriKolonDCCG.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-OperativProcedureKategoriKolonDCCG.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-OperativProcedureKategoriKolonDCCG.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.11.2/ValueSet-OperativProcedureKategoriKolonDCCG.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
