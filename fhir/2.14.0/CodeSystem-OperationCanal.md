# Operation canal - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operation canal**

## CodeSystem: Operation canal 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/OperationCanal | *Version*:2.14.0 |
| Active as of 2022-09-15 | *Computable Name*:OperationCanal |

 
Operation canal 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OperationKanalAntalDKRR](ValueSet-OperationKanalAntalDKRR.md)
* [OperationKanalFemurPlaceringDKRR](ValueSet-OperationKanalFemurPlaceringDKRR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "OperationCanal",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/OperationCanal",
  "version" : "2.14.0",
  "name" : "OperationCanal",
  "title" : "Operation canal",
  "status" : "active",
  "date" : "2022-09-15T00:00:00+02:00",
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
  "description" : "Operation canal",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "1_canal",
      "display" : "1 canal",
      "definition" : "1 canal / 1 kanal"
    },
    {
      "code" : "2_canals",
      "display" : "2 canals",
      "definition" : "2 canals / 2 kanaler"
    },
    {
      "code" : "transtibial",
      "display" : "Transtibial",
      "definition" : "Transtibial"
    },
    {
      "code" : "anatomical",
      "display" : "Anatomical",
      "definition" : "Anatomical / Anatomisk"
    }
  ]
}

```
