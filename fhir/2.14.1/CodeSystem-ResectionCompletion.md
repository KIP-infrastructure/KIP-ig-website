# Resection completion; justification - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Resection completion; justification**

## CodeSystem: Resection completion; justification 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ResectionCompletion | *Version*:2.14.1 |
| Active as of 2022-06-07 | *Computable Name*:ResectionCompletion |

 
Resection completion; justification 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ResektionUdfoerelseDCCG](ValueSet-ResektionUdfoerelseDCCG.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ResectionCompletion",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ResectionCompletion",
  "version" : "2.14.1",
  "name" : "ResectionCompletion",
  "title" : "Resection completion; justification",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Resection completion; justification",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "undeterminable_radicality_piecemeal",
      "display" : "Radikalitet af lokalresektionen kan ikke vurderes på grund af piecemeal teknik",
      "definition" : "Radikalitet af lokalresektionen kan ikke vurderes på grund af piecemeal teknik"
    },
    {
      "code" : "missing_radicality_sektion",
      "display" : "Manglende radikalitet af endoskopiske lokalresektion",
      "definition" : "Manglende radikalitet af endoskopiske lokalresektion"
    },
    {
      "code" : "pathology_risk_factors",
      "display" : "Tilstedeværelse af en eller flere patologirisikofaktorer",
      "definition" : "Tilstedeværelse af en eller flere patologirisikofaktorer"
    },
    {
      "code" : "missing_radicality_risk",
      "display" : "Manglende radikalitet og tilstedeværelse af risikofaktorer",
      "definition" : "Manglende radikalitet og tilstedeværelse af risikofaktorer"
    }
  ]
}

```
