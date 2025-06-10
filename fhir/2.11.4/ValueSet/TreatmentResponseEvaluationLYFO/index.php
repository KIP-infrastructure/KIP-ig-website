<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.4/ValueSet-TreatmentResponseEvaluationLYFO.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.4/ValueSet-TreatmentResponseEvaluationLYFO.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.4/ValueSet-TreatmentResponseEvaluationLYFO.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.4/ValueSet-TreatmentResponseEvaluationLYFO.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.4/ValueSet-TreatmentResponseEvaluationLYFO.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://kip.rkkp.dk/fhir/2.11.4/ValueSet-TreatmentResponseEvaluationLYFO.html');
else 
  Redirect('https://kip.rkkp.dk/fhir/2.11.4/ValueSet-TreatmentResponseEvaluationLYFO.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
